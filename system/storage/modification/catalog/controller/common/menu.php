<?php
class ControllerCommonMenu extends Controller {
	public function index() {
		$this->load->language('common/menu');

		// Menu
		$this->load->model('catalog/category');


                $this->load->language('extension/module/tvcmscustomtext');
                if (isset($this->request->get['path'])) {
                    $parts = explode('_', (string)$this->request->get['path']);
                } else {
                    $parts = array();
                }

                if (isset($parts[0])) {
                    $data['category_id'] = $parts[0];
                } else {
                    $data['category_id'] = 0;
                }
                if(empty($_SERVER['QUERY_STRING']) || $_SERVER['QUERY_STRING'] == "route=common/home"){
                    $data['menuhomeactive'] = "current";
                }else{
                    $data['menuhomeactive'] = "";
                }
                $this->load->model('account/wishlist');
                if ($this->customer->isLogged()) {
                    $this->load->model('account/wishlist');

                    $data['text_wishlist_tv']   = sprintf($this->model_account_wishlist->getTotalWishlist());
                } else {
                    $data['text_wishlist_tv']   = sprintf((isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
                }

                $data['ttvcpmpare']             = $this->url->link('product/compare', '', true);

                if(!empty($this->session->data['compare'])){
                    $data['ttvcpmpare_count']   = count($this->session->data['compare']);
                }else{
                    $data['ttvcpmpare_count']   = 0;
                }
                
        $this->load->model('catalog/product');

        $data['categories'] = array();

        $categories = $this->model_catalog_category->getCategories(0);

        foreach ($categories as $category) {
            if ($category['top']) {
                // Level 2
                $children_data = array();

                $children = $this->model_catalog_category->getCategories($category['category_id']);

                foreach ($children as $child) {

				    $gchildren_data = array();
				    $gchildren = $this->model_catalog_category->getCategories($child['category_id']);

				    foreach ($gchildren as $gchild) {
				        $gchildren_filter_data = array(
				            'filter_category_id'  => $gchild['category_id'],
				            'filter_sub_category' => true
				        );
				        
				        $gchildren_data[] = array(
				            'name'  => $gchild['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($gchildren_filter_data) . ')' : ''),
				            'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'] . '_' . $gchild['category_id'])
				        );
				        
				    }
			
                    // Level 3 
                    $children_data_3 = array();

                    $children_3 = $this->model_catalog_category->getCategories($child['category_id']);

                    foreach ($children_3 as $child_3) {
                        
                        //  // Level 4 
                        //  $children_data_4 = array();
    
                        //  $children_4 = $this->model_catalog_category->getCategories($child_3['category_id']);
    
                        //  foreach ($children_4 as $child_4) {
    
                        //         $filter_data_4 = array(
                        //                 'filter_category_id'  => $child_4['category_id'],
                        //                 'filter_sub_category' => true
                        //         );
    
                        //         $children_data_4[] = array(
                        //                 'name'  => $child_4['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data_4) . ')' : ''),
                        //                 'href'  => $this->url->link('product/category', 'path=' . $child_3['category_id'] . '_' . $child_4['category_id'])
                        //         );
                        //  }
                         //end of level 4                            
              
                
                            $filter_data_3 = array(
                                    'filter_category_id'  => $child_3['category_id'],
                                    'filter_sub_category' => true
                            );

                            $children_data_3[] = array(
                                    'name'  => $child_3['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data_3) . ')' : ''),
                                    'href'  => $this->url->link('product/category', 'path=' . $child['category_id'] . '_' . $child_3['category_id'])
                                                              
                            );                      
                    }
                    //end of level 3                                          
                               
                    $filter_data = array(
                        'filter_category_id'  => $child['category_id'],
                        'filter_sub_category' => true
                    );

                    $children_data[] = array(
                        'thumb_menus' => HTTP_SERVER . 'image/' .$child['image'],
                        'name'  => $child['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),

                        'gchildren' => $gchildren_data,
					    'column'   => $child['column'] ? $child['column'] : 1,
			
                        'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id']),
                        'grand_childs' => $children_data_3//for level 3
                    );  
                }

                // Level 1
                $data['categories'][] = array(
                    'name'     => $category['name'],

                'category_id'     => $category['category_id'],
                
                    'children' => $children_data,
                    'thumb_menu' => HTTP_SERVER . 'image/' . $category['image'],
                    'column'   => $category['column'] ? $category['column'] : 1,
                    'href'     => $this->url->link('product/category', 'path=' . $category['category_id'])
                );              
            }

		
        }
		return $this->load->view('common/menu', $data);
	}
}
