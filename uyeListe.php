<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
include_once './Member.php';
$Member= new Member();
if ( $Member->isLogined() == false ){
    header('Location: index.php');
    exit;
}


?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
       <div id="container">
        <div id="content">
            <?php
            $MemberList = $Member->getUye(10);
            ?>
            
            <table border="1" cellpadding="2">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Ad</th>
                        <th>Soyad</th>
                        <th>Email</th>
                        
                    </tr>
                </thead>
                <tbody>
                  <?php
            if (is_null($MemberList) ){
                echo '<tr><td colspan="5">No record.</td></tr>';
            }else{
                foreach ($MemberList as $MemberItem) {
                    $MemberItem =(object)$MemberItem;
                    ?>
                    <tr>
                        <td><?php echo $MemberItem->id; ?></td>
                        <td><?php echo $MemberItem->email; ?></td>
                        <td><?php echo $MemberItem->ad; ?></td>
                        <td><?php echo $MemberItem->soyad; ?></td>
                        <td>
                            <a href="ajax.php?id=<?php echo $MemberItem->id; ?>">
                                <input data-takip="$id" class='takip_et' type='button' value='Takip Et' name='takip_et' />
                            </a>
                        </td>
                    </tr>
                <?php
                }
            }
            ?>

                </tbody>
            </table>
                <script src="js/jquery-2.1.0.min.js"></script>
                <script src="bootstrap/js/bootstrap.min.js"></script>
                <script src="js/holder.js"></script>
                <script src="js/jquery-2.1.0.min.js"></script>
                <script src="bootstrap/js/bootstrap.min.js"></script>
                <script src="js/holder.js"></script>
                
                <script>
                $(document).ready(function(){
                    $.each( $('.takip_et'), function(){
                        $(this).click(function(){
                            var takipedilen = $(this).data('UyeItem');
                            

                            $.get(
                                'ajax.php',
                                { takipedilen:UyeItem },
                                function(data){
                                    alert(data);
                                   

                                }
                            );
                        });
                    });
                    

                });
                </script>

        </div>
       </div>
    </body>
</html>
