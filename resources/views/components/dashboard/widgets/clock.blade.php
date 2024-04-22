<div class="rounded-lg bg-blue-500 text-white p-4 h-60 flex flex-col justify-center items-center">
  <div id="clock" class="text-center">
    <span class="text-6xl font-semibold" id="time">--:--</span><br/>
    <span class="text-2xl" id="date">-- ---</span>
  </div>
</div>
<script>
  function updateClock() {
    const now = new Date();
    const hours = now.getHours().toString().padStart(2, '0');
    const minutes = now.getMinutes().toString().padStart(2, '0');
    const day = now.getDate();
    const monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun",
      "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
    ];
    const month = monthNames[now.getMonth()];

    document.getElementById('time').textContent = `${hours}:${minutes}`;
    document.getElementById('date').textContent = `${day} ${month}`;
  }

  // Update the clock immediately and then every 60 seconds
  updateClock();
  setInterval(updateClock, 60000);
</script>