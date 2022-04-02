</div>
  </div>
  
  <!-- optional javescript -->
  <!--jquary frist ,than poppor,js ,than boostrap js -->
  <script src="<?php echo ASSETS ;?>/js/bootstrap.min.js"></script>
  <script scr="<?php echo ASSETS ;?>/js/jquery-3.6.0.min.js"></script>
  <script scr="<?php echo ASSETS ;?>/js/poper.3.4.1.min.js"></script>
  
  </nav>

<script>
  $(".delete").click(function(){

    var item_id=$(this).attr("data-id");
    var table =$(this).attr("data-table");
    var field =$(this).attr("data-field");
  })


</script>
</body>
</html>