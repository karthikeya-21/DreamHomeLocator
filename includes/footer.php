   <!-- ======= Footer ======= -->
<center><footer id="footer">
    <div class="footer-top">
      <!-- <div class="containerr">
        <div class="sub-container">
          <div class="col-lg-3 col-md-6 footer-info">
            <img src="img/new/footer.png" alt="img">
            <div class="social-links">
              <a href="#" class="twitter"><img src="img/new/Twitter-icon.png" alt=""></a>
              <a href="#" class="facebook"><img src="img/new/FB-icon.png" alt=""></a>
              <a href="#" class="instagram"><img src="img/new/Insta-icon.png" alt=""></a>
              <a href="#" class="linkedin"><img src="img/new/LinkedIn-icon.png" alt=""></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 footer-contact">
            <ul>
              <li>+91 88688 85452</li>
              <li>invest@gharperfect.com</li>
              <li>Dehradun, Uttarakhand</li>
              <li><button id="cntct">Contact Us</button></li>
            </ul>
          </div>
        </div>
      </div> -->


      <div class="footer-container">
      <?php include 'includes/connection.php';
      $query = "SELECT * FROM static_content";
      $result = mysqli_query($connection, $query);
      $row = mysqli_fetch_assoc($result);
?>
        <div class="sub-container social-links">
          <div style="display: flex;flex-direction: column;">
        <img src="img/new/footer2.png" height="150px" alt="img">
        <h5><b>DreamHomeLocator.com</b></h5 >  
        </div>
        <div class="links">
              <a href="<?=$row['twitter']?>" class="twitter"><img src="img/new/Twitter-icon.png" alt=""></a>
              <a href="<?=$row['facebook']?>" class="facebook"><img src="img/new/FB-icon.png" alt=""></a>
              <a href="<?=$row['instagram']?>" class="instagram"><img src="img/new/Insta-icon.png" alt=""></a>
              <a href="<?=$row['youtube']?>" class="linkedin"><img src="img/new/LinkedIn-icon.png" alt=""></a>
        </div>
  </div>
        <div class="sub-container">
          <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About us</a></li>
              <li><a href="property.php">Property</a></li>
              <li><a href="contact.php">Contact Us</a></li>
              <li><a href="blogs.php">Blogs and Newsletters</a></li>
            </ul>
          </div>
        <div class="sub-container"><ul>
              <div class="footer-links">
                <img src="img/new/Call-icon.png" alt="" width="40px" />
                <li><?=$row['mobileno']?></li>
              </div>
              <div class="footer-links">
              <img src="img/new/Email-icon.png" alt="" width="40px" />
              <li><?=$row['email']?></li>
  </div>
              <div class="footer-links">
              <img src="img/new/Location-icon.png" alt="" width="40px" />
              <li><?=$row['address']?></li>
  </div>
              <div class="footer-last-btn">
              <li><button onclick="location.href='contact.php'" id="cntct">Contact Us</button></li>
              </div>
            </ul></div>
      </div>

    </div>
  </footer>
  </center>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src='js/index.js'></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>
