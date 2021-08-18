if($username = "admin123"){
                              header("location: welcome_admin.php"); 
                            }else{
                            header("location: welcome_user.php");
                            }