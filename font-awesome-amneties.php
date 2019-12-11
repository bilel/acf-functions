//To be added to Functions.php or in a plugin
/*
This function could be used in a loop or in the post page and it would call any (true) boolean field attached to this post ($pid) and display it's Fontawesome icon.
We just need to define the appropriate font awesome class for every Field name.
Amneties is an example ! It can be used to any kind of template showing different options for each item like a Product, an App or cars...
*/


function amneties($pid){
    $fields = get_field_objects($pid);
    $faw = array('loc-piscine' => 'fa-swimming-pool','loc-jardin'=>'fa-tree-palm','loc-garage'=>'fa-car-garage');
                                
                                 foreach ( $fields as $field ) : 
                                 
                                  if( $field['type'] == 'true_false' && $field['value'] == '1')
                                    {
                                        
                                       echo '<span class="fa-stack" style="vertical-align: middle;">
                                          <i class="far fa-circle fa-stack-2x"></i>
                                          <i class="fas '.$faw[$field['name']].' fa-stack-1x"></i>
                                        </span>';
                                    }
                                    
                                 endforeach; 

}
