
    <div class=" footer "> <!--!!!!!!!!!!!!!!!! FOOTER START-->
        
  
        <div class="container">
         <div class="row">
   
        
        

        <div class="col-md-4 foot-item">  
        
        
   
  <div class="header-area">
    <?php dynamic_sidebar( 'footer-1' ); ?>
  </div>

        
        </div>
        
        
              <div class="col-md-4 foot-item">         
              
          
  <div class="header-area">
    <?php dynamic_sidebar( 'footer-2' ); ?>
  </div>

             
             
             </div>
                
          <div class="col-md-4 foot-item">
          
           
       <div class="header-area">
    <?php dynamic_sidebar( 'footer-3' ); ?>
  </div>
  
        </div>
   
        </div>
</div>
   

   </div>
    
    <?php wp_footer(); ?>
    
   <?php if (is_page('contact')): ?>
   
    <script src="https://maps.googleapis.com/maps/api/geocode/json?address=1600+Amphitheatre+Parkway,+Mountain+View,+CA&key=AIzaSyBbDofp7kl59pN6ArrT-RWGr69wdUHqCt4"</script>
    

   <?php endif;?>
       
    


    
</body>
</html>