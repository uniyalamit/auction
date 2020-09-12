<div class="table-responsive">
                      <form action="<?php echo site_url('group/group_delete');?>" method="POST">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                               <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">ID </th>
                            <th class="column-title">Group Name </th>
                            
                            <th class="column-title no-link last"><span class="nobr">Update</span>
                            </th>
                            <th class="column-title no-link last"><span class="nobr">Delete</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                         
                       
                            
                          <?php
                           foreach ($r as $row) {
                             
                          ?>
                          
                          <tr class="even pointer">
                            <td class="a-center ">
                               <input type="checkbox" class="flat" name="id[]"  name="table_records" value="<?php echo $row->g_id;?>" >
                             <!--  <input type="checkbox" name="id[]" class="cbgroup1"  name="table_records" value="<?php echo $row->g_id;?>"  > -->
                            </td>
                            <td class=" "><?php echo $row->g_id;?></td>
                            <td class=" "><?php echo $row->g_name;?> </td>
                            <td class=" last"><a href="#"></a><button class="btn btn-primary btn-xs" ><span class="glyphicon glyphicon-pencil"></span></button></td>
                             <!-- <td><a href="<?php /*echo site_url('group/group_delete/').*/$row->g_id;?>"><button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button></a></td> -->

                          </tr>
                          <?php
                        }
                          ?>
                          <td class=" last">
                            <input type="submit" value="delete" class="delete" onclick="return confirm('are you sure?')">
                             <!--  <a href="<?php /*echo site_url('group/group_delete/').*/$row->g_id;?>"><button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button></a> -->
                               <!-- <input type="submit" value="delete" > -->
                             </td>
                          
                        </tbody>
                      </table>
                      </form>
</div>

<?php
 require ('includes/user_header.php');
session_start();

include('includes/config.php');

//include('includes/user_sidebar.php');
$user_id=$_SESSION['user_id'];
?>
<html>
    <head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<script>
function single_del(a){
        var r=confirm('Are you sure want to delete it');
        if(r==true){
           $.post('delete.php',
                {
                    faq_id : a
                },
            function(data, status){
                location.reload();
                }); 
        }
    }
    
 function del(a){
         if(a!=''){
             var r=confirm("Are you sure want to delete it";
             if(r==true){
                 //alert('hi');
                 document.getElementById("myform".submit();
             }
        }
      
  }
function checkAll(ele) {
         
     var checkboxes = document.getElementsByTagName('input');
     if (ele.checked) {
         for (var i = 0; i < checkboxes.length; i++) {
             if (checkboxes[i].type == 'checkbox') {
                 checkboxes[i].checked = true;
             }
         }
     } else {
         for (var i = 0; i < checkboxes.length; i++) {
             console.log
             if (checkboxes[i].type == 'checkbox') {
                 checkboxes[i].checked = false;
             }
         }
     }
 }
    $(document).ready(function(){
        $('.hide').hide();
           $('.myTable').DataTable({
            "order": [[ 0, "DESC" ]] 
           });
           
        });
        </script>
        <style>
        </style>
        </head>
        <body>
        <div style="width:100%">
<?php
//include_once 'database.php';
if(isset($_POST['check'])){
    //echo 'ok';
    $checkbox = $_POST['check'];
    for($i=0;$i<count($checkbox);$i++){
   $del_id = $checkbox[$i]; 
    $result= mysqli_query($conn,"DELETE FROM tbl_faq WHERE faq_id='".$del_id."'";
       // if($result){
         // echo "<script>alert('data deleted successfully')</script>"; 
       // }
    }
    
}
$result = mysqli_query($conn,"SELECT * FROM tbl_faq";
?>            
<form method="POST" action="" name="myform" id="myform">            
 <table id="table_of_items" border="0" width="100%" cellpadding="0" cellspacing="0"  class="myTable">
            <thead>
                <tr> 
                    <th><input type="checkbox" id="checkAl"> Select All</th>
                    <th>Serial No.</th>
                    <th style="font-size:15px;font-weight:normal;">faq_ques</th>
                    <th style="font-size:15px;font-weight:normal;">faq_answ</th>
                    <th style="font-size:15px;font-weight:normal;">remove</th>
                    <th style="font-size:15px;font-weight:normal;">update</th>
                    <th style="font-size:15px;font-weight:normal;">
                    <select onchange="del(this.value)">
                        <option value="">-SELECT ACTION-</option>
                        <option value="Delete">Delete</option>
                    </select>
                    </th>
                </tr>
</thead>
<tbody>
    <?php if(isset($_GET['deleteid'])&&($_GET['deleteid']!='')){
      echo 'ok';
       $id= mysqli_real_escape_string($conn,$_GET['deleteid']);
       //echo $id;
       //build the query
        
       $result= mysqli_query($conn,"DELETE FROM tbl_faq WHERE faq_id='".$id."'";
        //if($result){
           // echo "<script>alert('data deleted successfully')</script>"; 
       // }
    
    } ?>
    <?php 
           $sql="SELECT * FROM tbl_faq";
            $result= mysqli_query($conn,$sql);
            $x=1;
            while($row= mysqli_fetch_array($result)){
            $a=$row['faq_id'];
        ?>    
    <tr>
      <td><input type="checkbox" id="checkItem" name="check[]" value="<?php echo $row["faq_id"]; ?>"></td>
                <td>
                 <?PHP echo $x; ?>
             </td> 
             <td style="text-align:center;" class="td"><?php echo $row['faq_ques'] ?></td>
             <td style="text-align:center;" class="td"><?php echo $row['faq_ans'] ?></td>
        <td><a href="javascript:void(0)"  onclick="single_del('<?php echo $a ?>')" <i class="fa fa-trash" style="font-size:48px;color:blue" aria-hidden="true"></i></a></td>
        <td><a href="editfaq.php?faq_id=<?php echo $row['faq_id']; ?>"  <i class="fa fa-pencil" style="font-size:48px;color:red" aria-hidden="true"></i></a></td>
    </tr>
    
    <?php
    $x++;
    $i++;
     }
     ?>
    <script>
        $("#checkAl".click(function () {
           // alert('ok');
        $('input:checkbox').not(this).prop('checked', this.checked);
});
</script>
</tbody>
</table>
</form>
</div>
<script>
$(document).ready(function(){
    $("form".submit(function(){
        alert("Submitted";
    });
});
</script>
 <?php
//require ('includes/user_footer.php');
    ?>
</body>
</html>


