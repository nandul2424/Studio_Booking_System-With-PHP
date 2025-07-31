<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Bookings</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .bg-mybookings {
      background-image: url('https://images.unsplash.com/photo-1601993396046-7485bbf4ac16?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
      background-size: cover;
      background-position: center;
    }
  </style>
</head>
<body class="bg-mybookings min-h-screen min-w text-white overflow-hidden">

  <!-- 🔷 Navigation Bar -->
  <nav class="bg-white/90 shadow-md backdrop-blur-sm sticky top-0 z-50">
    <div class="max-w-6xl mx-auto px-4 py-3 flex justify-between items-center">
      <a href="index.php" class="text-xl font-bold text-blue-600">Studio Booking</a>
      <ul class="flex space-x-6 text-sm font-medium">
        <li><a href="book.php" class="text-gray-700 hover:text-blue-600">Book</a></li>
        <li><a href="mybookings.php" class="text-gray-700 hover:text-blue-600">My Bookings</a></li>
        <li><a href="#" class="text-gray-700 hover:text-blue-600">Logout</a></li>
        <li><a href="#" class="text-gray-700 hover:text-blue-500">Register</a></li>
      </ul>
    </div>
  </nav>

  <!-- 🔷 My Bookings Section -->
  <section class="bg-black/60 py-12 px-4 min-h-screen">
    <div class="max-w-5xl mx-auto text-white">
      <h2 class="text-3xl font-bold mb-6">My Bookings</h2>

      <div class="overflow-x-auto bg-white/10 rounded-xl backdrop-blur-md shadow-xl">
        <table class="w-full table-auto border-collapse text-white">
          <thead class="bg-blue-600 text-white">
            <tr>
              <th class="py-3 px-4 text-left">Package</th>
              <th class="py-3 px-4 text-left">Date</th>
              <th class="py-3 px-4 text-left">Time</th>
              <th class="py-3 px-4 text-left">Status</th>
            </tr>
          </thead>
          <tbody>

  <tr class="border-t border-white/20 hover:bg-white/10">
            <td class="py-2 px-3">
            <textarea class="w-full bg-white/10 text-white rounded p-2 resize-none focus:outline-none focus:ring-2 focus:ring-blue-500 shadow-inner" rows="1" readonly>Portrait Shoot</textarea>
            </td>
            <td class="py-2 px-3">
            <textarea class="w-full bg-white/10 text-white rounded p-2 resize-none focus:outline-none focus:ring-2 focus:ring-blue-500 shadow-inner" rows="1" readonly>2025-08-05</textarea>
            </td>
            <td class="py-2 px-3">
            <textarea class="w-full bg-white/10 text-white rounded p-2 resize-none focus:outline-none focus:ring-2 focus:ring-blue-500 shadow-inner" rows="1" readonly>10:30 AM</textarea>
            </td>
            <td class="py-2 px-3">
            <textarea class="w-full bg-white/10 text-green-400 rounded p-2 resize-none focus:outline-none focus:ring-2 focus:ring-green-400 shadow-inner" rows="1" readonly>Confirmed</textarea>
            </td>
  </tr>

  <tr class="border-t border-white/20 hover:bg-white/10">
             <td class="py-2 px-3">
            <textarea class="w-full bg-white/10 text-white rounded p-2 resize-none focus:outline-none focus:ring-2 focus:ring-blue-500 shadow-inner" rows="1" readonly>Birthday Coverage</textarea>
            </td>
            <td class="py-2 px-3">
            <textarea class="w-full bg-white/10 text-white rounded p-2 resize-none focus:outline-none focus:ring-2 focus:ring-blue-500 shadow-inner" rows="1" readonly>2025-09-05</textarea>
            </td>
            <td class="py-2 px-3">
            <textarea class="w-full bg-white/10 text-white rounded p-2 resize-none focus:outline-none focus:ring-2 focus:ring-blue-500 shadow-inner" rows="1" readonly>12:30 AM</textarea>
            </td>
            <td class="py-2 px-3">
            <textarea class="w-full bg-white/10 text-green-400 rounded p-2 resize-none focus:outline-none focus:ring-2 focus:ring-green-400 shadow-inner" rows="1" readonly>Not Confirmed</textarea>
            </td>
  </tr>

            <!-- Dynamic rows come here using PHP/MySQL -->
          </tbody>
        </table>
      </div>
    </div>
  </section>

</body>
</html>