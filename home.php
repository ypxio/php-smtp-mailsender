<?php
session_start();
include_once("header.php");
// print_r($_SESSION);
?>

<style type="text/css">

      /* Sticky footer styles
      -------------------------------------------------- */

      html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
      }

      /* Wrapper for page content to push down footer */
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
      }

      /* Set the fixed height of the footer here */
      #push,
      #footer {
        height: 60px;
      }
      #footer {
        background-color: #f5f5f5;
      }

      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }

      tr.info
      {
        font-weight: bold;
      }

      tr td{
        overflow: hidden;
      }



      /* Custom page CSS
      -------------------------------------------------- */
      /* Not required for template or sticky footer method. */

      .container {
        width: 0 auto;
        max-width: 960;
      }
      .container .credit {
        margin: 20px 0;
      }

      .page-header h4
      {
        font-weight: normal;
      }

      </style>

      <body>

<?php

if($_POST)
{
  $_SESSION['username'] = $_POST['username'];
  $_SESSION['password'] = $_POST['password'];
  $_SESSION['server'] = $_POST['server'];
  $_SESSION['port'] = $_POST['port'];
  $_SESSION['secure'] = $_POST['secure'];
}


?>

        <!-- Part 1: Wrap all page content here -->
        <div id="wrap">

          <!-- Begin page content -->
          <div class="container">
            <div class="page-header">
              <h1>PTIIK Mail</h1>
              <h4>Mail Client App Example with SMTP - Login as <?php echo $_SESSION['username'] ?></h4>
            </div>
            <?php
            if($_SESSION['success']==1)
            {
              ?>
              <div class="alert alert-success">
              Message sends succesfully!. you should check the recipient email to see the message.
            </div>
              <?php
              $_SESSION['success']=0;
            }
            ?>
            
            <div class="row">
              <div class="span12">
                <div class="row">
                  <div class="span6">
                    <a data-toggle="modal" data-target=".modal" class="btn btn-info"><i class="icon-plus icon-white"></i> Compose New Message</a>
                    
                  </div>
                  <div class="span6"></div>
                </div>
              </div>
            </div>
            <!-- </div> -->
            <!-- <p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS.</p> -->
          </div>

          <div id="push"></div>
        </div>

        <div id="footer">
          <div class="container">
            <p class="muted credit">
              Pemrograman Jaringan | Aldim Irfani Vikri - Yuri Citra Pratama - Delis Sukmawati  </p>
          </div>
        </div>

        <?php

        include_once("footer.php");
        include_once("new.php");

        // session_destroy();
        ?>

        