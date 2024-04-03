<?php $title="Business Add Form";
   include'includes/header.php'?>
<div>
   <head>
      <style>
         .business-body {
            margin-left: 40px;
         }
         

.business strong{
  color: #800000;
}

.business a {
    color: #800000;
}

.business p {
    color: #800000;
}

.business h2{
  color: #800000;
}
.container {
  position: relative;
  width: 100%;
  overflow: hidden;
  padding-top: 100%;
  /*background: #ccc;*/
  border-radius: 1em;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
}

.responsive-iframe {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
  border: none;
}
      </style>
   </head>
   <div class= "business">
       <p class="adjust">Fill out the form down here or you can use the Google Form links <a href="https://forms.gle/xfVuTCZTRXBa8kpT7" target="_blank">here</a></p>
       <div class="container"> 
          <iframe class="responsive-iframe" src="https://docs.google.com/forms/d/e/1FAIpQLSf3ZHaTeQFMlDf4qzLOf4cfoCeL0_FvvLvIE_I5o9enDb_3JA/viewform?embedded=true">Loading...</iframe>
        </div>
   </div>
</div>
<?php include'includes/footer.php'?>