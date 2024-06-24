<?php 
/**
 * Main template file.
 * 
 * @package myblog
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Section</title>
  <link rel="stylesheet" href="styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
<script>
$(document).ready(function() {
    // Function to filter items based on section selection
    function filterItems(section) {
        $('.item').each(function() {
            if (section === 'all' || $(this).data('section') === section) {
                $(this).addClass('active');
            } else {
                $(this).removeClass('active');
            }
        });
    }

    // Initial filter
    filterItems($('#sectionFilter').val());

    // Event handler for dropdown change
    $('#sectionFilter').change(function() {
        var selectedSection = $(this).val();
        filterItems(selectedSection);
    });
});
  </script>
 
 <style>
  body {
    margin:20px;
  }
.item {
    margin: 5px 0;
    padding: 10px;

    background-color: #f9f9f9;
    display: none;
}

.sec{
    border: 1px solid #ccc;

}
.item.active {
    display: block;
}

.pagination{
  cursor:pointer;
}
h3{
  color:red;
}
  </style>

</head>
<body>

<h2>Blog page</h2>
<hr/>
<div id="filterSection">
    <label for="sectionFilter" style="font-size:20px;">Filter by Section:</label>
    <select id="sectionFilter">
        <option value="all">All</option>
        <option value="section1">case studies</option>
        <option value="section2">Current events</option>
        <option value="section3">Interviews</option>
        <option value="section4">Guest blogging</option>
        <option value="section5">Infographic</option>
    </select>
</div>

<div id="contentSection">
<div class="item" data-section="section1" id="section1">
<div class="container">
<div class="row">
    <div class="col-sm-3 sec">
      <h3>case studies</h3>  
      <p>Case studies are a type of blog content that allows you to showcase real-life examples of any 
        selected topic that you choose to cover for your blog</p>
    </div>
    <div class="col-sm-3 sec">
    <h3>Infographic</h3>  
      <p>Infographics are a type of blog content that allows you to simplify the content using visuals,
        making it a more engaging and effective type of content. You </p>
    </div>
    <div class="col-sm-3 sec">
    <h3>Listicles</h3>  
      <p>Listicles. Who doesn't love lists right? List articles are always among the most shared on the internet.
        You can create a list of just about anything ..</p>
    </div>
    <div class="col-sm-3 sec">
    <h3>Narrative</h3>  
      <p>A narrative, story, or tale is any account of a series of related events or experiences, whether non-fictional 
        or fictional. Narratives can be presented </p>
    </div>
</div>
</div>
</div>
    <div class="item" data-section="section3" id="section3"> 
    <div class="container">
      <div class="row">
          <div class="col-sm-3 sec">
            <h3>Interviews</h3>  
            <p>Case studies are a type of blog content that allows you to showcase real-life examples of any 
              selected topic that you choose to cover for your blog</p>
          </div>
          <div class="col-sm-3 sec">
          <h3>Reviews</h3>  
            <p>Infographics are a type of blog content that allows you to simplify the content using visuals,
              making it a more engaging and effective type of content. You </p>
          </div>
          <div class="col-sm-3 sec">
          <h3>Buying guides</h3>  
            <p>Listicles. Who doesn't love lists right? List articles are always among the most shared on the internet.
              You can create a list of just about anything ..</p>
          </div>
          <div class="col-sm-3 sec">
          <h3>Checklists</h3>  
            <p>A narrative, story, or tale is any account of a series of related events or experiences, whether non-fictional 
              or fictional. Narratives can be presented </p>
          </div>
      </div>
      </div>
    </div>
    <div class="item" data-section="section2" id="section1"> 
    <div class="container">
        <div class="row">
            <div class="col-sm-3 sec">
              <h3>Current events</h3>  
              <p>Case studies are a type of blog content that allows you to showcase real-life examples of any 
                selected topic that you choose to cover for your blog</p>
            </div>
            <div class="col-sm-3 sec">
            <h3>FAQs</h3>  
              <p>Infographics are a type of blog content that allows you to simplify the content using visuals,
                making it a more engaging and effective type of content. You </p>
            </div>
            <div class="col-sm-3 sec">
            <h3>Tutorials</h3>  
              <p>Listicles. Who doesn't love lists right? List articles are always among the most shared on the internet.
                You can create a list of just about anything ..</p>
            </div>
            <div class="col-sm-3 sec">
            <h3>Comparisons</h3>  
              <p>A narrative, story, or tale is any account of a series of related events or experiences, whether non-fictional 
                or fictional. Narratives can be presented </p>
            </div>
        </div>
        </div>
    </div>
    <div class="item" data-section="section4" id="section2">
    <div class="container">
      <div class="row">
          <div class="col-sm-3 sec">
            <h3>Guest blogging</h3>  
            <p>Case studies are a type of blog content that allows you to showcase real-life examples of any 
              selected topic that you choose to cover for your blog</p>
          </div>
          <div class="col-sm-3 sec">
          <h3>Video</h3>  
            <p>Infographics are a type of blog content that allows you to simplify the content using visuals,
              making it a more engaging and effective type of content. You </p>
          </div>
          <div class="col-sm-3 sec">
          <h3>Vlogs</h3>  
            <p>Listicles. Who doesn't love lists right? List articles are always among the most shared on the internet.
              You can create a list of just about anything ..</p>
          </div>
          <div class="col-sm-3 sec">
          <h3>events</h3>  
            <p>A narrative, story, or tale is any account of a series of related events or experiences, whether non-fictional 
              or fictional. Narratives can be presented </p>
          </div>
      </div>
      </div>
    </div>
    <div class="item" data-section="section5" id="section4">
    <div class="container">
      <div class="row">
          <div class="col-sm-3 sec">
            <h3>Infographic</h3>  
            <p>Case studies are a type of blog content that allows you to showcase real-life examples of any 
              selected topic that you choose to cover for your blog</p>
          </div>
          <div class="col-sm-3 sec">
          <h3>Infographic</h3>  
            <p>Infographics are a type of blog content that allows you to simplify the content using visuals,
              making it a more engaging and effective type of content. You </p>
          </div>
          <div class="col-sm-3 sec">
          <h3>Listicles</h3>  
            <p>Listicles. Who doesn't love lists right? List articles are always among the most shared on the internet.
              You can create a list of just about anything ..</p>
          </div>
          <div class="col-sm-3 sec">
          <h3>Narrative</h3>  
            <p>A narrative, story, or tale is any account of a series of related events or experiences, whether non-fictional 
              or fictional. Narratives can be presented </p>
          </div>
      </div>
      </div>
    </div>
</div>

<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#section1">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#section1">1</a></li>
    <li class="page-item"><a class="page-link" href="#section3">2</a></li>
    <li class="page-item"><a class="page-link" href="#section2">3</a></li>
    <li class="page-item"><a class="page-link" href="#section4">Next</a></li>
  </ul>
</nav>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>
</html>
