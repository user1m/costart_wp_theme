  <?php get_header(); ?>
  <!-- cal min js -->
  <script src='<?php bloginfo('template_url'); ?>/js/moment.min.js'></script>
  <script src='<?php bloginfo('template_url'); ?>/js/fullcalendar.min.js'></script>
  <script src='<?php bloginfo('template_url'); ?>/js/gcal.js'></script>
  <script>
  $(document).ready(function() {

    $('#calendar').fullCalendar({

      // US Holidays
      // events: "http://www.google.com/calendar/feeds/usa__en%40holiday.calendar.google.com/public/basic"
      events: 'https://www.google.com/calendar/feeds/co.start.now%40gmail.com/public/basic',

      eventClick: function(event) {
        // opens events in a popup window
        window.open(event.url, 'gcalevent', 'width=700,height=600');
        return false;
      },

      loading: function(bool) {
        $('#loading').toggle(bool);
      }

    });

  });

  </script>

  <section class="calendar">
    <div class="container">
      <div class="heading">
        <h2>Calendar</h2>
      </div>
      <div id="calendar"></div>
    </div>
</section>
<?php get_footer(); ?>
