<?
##import to category\object controller (near line 200)
$attr_array = array();								
foreach ($this->model_catalog_product->getProductAttributes($result['product_id']) as $attribute_group) { 
$attr_array[$attribute_group['attribute_group_id']] = array('name'=>$attribute_group['name']);
foreach ($attribute_group['attribute'] as $attribute) {  
$attr_array[$attribute_group['attribute_group_id']]['attributes'][$attribute['attribute_id']] = array('name'=>$attribute['name'],'value'=>$attribute['text']);
	}  
} 


$this->data['products'][] = array(
					##############add
					'attribute_groups' => $attr_array,
					#############add
				);
			}
			
			
/*
get value of attribute
<div><?php echo $product['attribute_groups'][YOURS_GROUP_ID]["attributes"][YOURS_ATTR_ID]["name"]; ?>: <?php echo $product['attribute_groups'][YOURS_GROUP_ID]["attributes"][YOURS_ATTR_ID]["value"]; ?></div>
*/
?>