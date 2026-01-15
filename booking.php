<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Book a Package - Studio Booking</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .bg-booking {
      background-image: url('https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c');
      background-size: cover;
      background-position: center;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .fade-in-up {
      animation: fadeInUp 1s ease-out;
    }
  </style>
</head>
<body class="bg-booking min-h-screen">

  <!-- NAVIGATION BAR -->
  <nav class="bg-white/90 shadow-md backdrop-blur-sm sticky top-0 z-50">
    <div class="max-w-6xl mx-auto px-4 py-3 flex justify-between items-center">
      <a href="#" class="text-xl font-bold text-blue-600">Studio Booking</a>
      <ul class="flex space-x-4 text-sm font-medium">
        <li><a href="#" class="text-gray-700 hover:text-blue-600">Home</a></li>
        <li><a href="book.php" class="text-gray-700 hover:text-blue-600">Book</a></li>
        <li><a href="mybookings.php" class="text-gray-700 hover:text-blue-600">My Bookings</a></li>
        <li><a href="#" class="text-gray-700 hover:text-blue-600">Register</a></li>
         <li><a href="#" class="text-gray-700 hover:text-blue-600">Logout</a></li>
      </ul>
    </div>
  </nav>

  <!-- Booking Form Overlay -->
  <div class="bg-black/60 min-h-[calc(100vh-64px)] w-full flex items-center justify-center px-4">

    <!-- Booking Form Card -->
    <div class="max-w-md w-full bg-white/20 backdrop-blur-lg p-8 rounded-2xl shadow-2xl text-white fade-in-up mt-4">

      <h2 class="text-3xl font-bold text-center text-white mb-6">Book a Package</h2>

      <form>
        <!-- Package -->
        <div class="mb-4">
          <label for="package" class="block text-sm font-semibold mb-1">Select Package</label>
          <select id="package" class="w-full bg-white/80 text-black rounded-md p-2" required>
            <option value="">-- Choose a package --</option>
            <option value="1">Portrait Shoot - Rs. 2000 (30 mins)</option>
            <option value="2">Wedding Package - Rs. 15000 (2 hrs)</option>
            <option value="3">Birthday Coverage - Rs. 8000 (1.5 hrs)</option>
          </select>
        </div>

        <!-- Date -->
        <div class="mb-4">
          <label for="date" class="block text-sm font-semibold mb-1">Booking Date</label>
          <input type="date" id="date" class="w-full bg-white/80 text-black rounded-md p-2" required>
        </div>

        <!-- Time -->
        <div class="mb-4">
          <label for="start_time" class="block text-sm font-semibold mb-1">Start Time</label>
          <input type="time" id="start_time" class="w-full bg-white/80 text-black rounded-md p-2" required>
        </div>

        <!-- Submit -->
        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 rounded-md mt-4">
          Book Now
        </button>
      </form>

    </div>
  </div>

</body>
</html>
