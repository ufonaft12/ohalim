</div>
<footer>
<div class="top container">
  <div class="row">
    <div class="col-md-3 first-item">
      <h2>אודות</h2>
      <div class="footer-block">
      <p>רוניאל אוהלים מעניקה שירותי השכרת אוהלים לכל מטרה, השכרת ציוד לאירועים מסוגים שונים. אנו דואגים ללקוח תוך הקפדה על שירות ומקצועיות בכל הנדרש.</p>
      <p class="footer-phone">טלפון לבירורים: <a href="tel:072-372-8117" alt="מספר טלפון: 072-3728117">072-372-8117</a></p>
      <p class="footer-phone_text">מכבדים את כל סוגי כרטיסי האשראי:</p>
      <img src="/img/ashrai.png" alt="מכבדים את כל סוגי כרטיסי האשראי">
      </div>
    </div>
    <div class="col-md-3">
      <h2>שעות פתיחה</h2>
      <table>
        <tr>
          <td>ראשון</td>
          <td>20:00 - 09:00</td>
        </tr>
        <tr>
          <td>שני</td>
          <td>18:00 - 08:00</td>
        </tr>
        <tr>
          <td>שלישי</td>
          <td>18:00 - 08:00</td>
        </tr>
        <tr>
          <td>רביעי</td>
          <td>18:00 - 08:00</td>
        </tr>
        <tr>
          <td>חמישי</td>
          <td>18:00 - 08:00</td>
        </tr>
        <tr>
          <td>שישי</td>
          <td>14:00 - 08:00</td>
        </tr>
        <tr>
          <td>שבת</td>
          <td>סגור</td>
        </tr>
      </table>
    </div>
    <div class="col-md-3">
      <h2>כתובת החנות:</h2>
      <div id="map" class="map"></div>
      <script>
      function initMap() {
      var uluru = {lat: 30.8572066, lng: 36.2585535};
      var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 4,
      center: uluru
      });
      var marker = new google.maps.Marker({
      position: uluru,
      map: map
      });
      }
      </script>
      <script async defer
      src="https://maps.googleapis.com/maps/api/js?callback=initMap">
      </script>
    </div>
    <div class="col-md-3">
      <h2>השכרת אוהלים</h2>
      <ul id="menu-footer" class="menu-footer">
        <li class="menu-item">
          <a href="#">אוהלים ממוזגים</a>
        </li>
        <li class="menu-item">
          <a href="#">אוהל ענק</a>
        </li>
        <li class="menu-item">
          <a href="#">השכרת אוהל אבלים</a>
        </li>
        <li class="menu-item ">
          <a href="#">סוכת אבלים</a>
        </li>
        <li class="menu-item ">
          <a href="#">השכרת כסאות</a>
        </li>
        <li class="menu-item ">
          <a href="#">השכרת שולחנות</a>
        </li>
        <li class="menu-item ">
          <a href="#">השכרת מזגן נייד</a>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="bottom container">
  <div class="row">
    <div class="col-md-12">
      <div class="col-right">
        <p>© 2018 כל הזכויות שמורות</p>
      </div>
      <div class="col-left">
        <a href="https://digitouch.co.il" alt="קידום אתרים בגוגל" target="_blank">
          קידום אתרים בגוגל
          <img src="/img/digi_logo.png" alt="קידום אתרים בגוגל">
        </a>
      </div>
    </div>
  </div>
</div>
</footer>
</body>
</html>