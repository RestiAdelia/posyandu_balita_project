<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Sederhana</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex">

  <!-- Sidebar -->
  <aside class="w-64 bg-white shadow-md h-screen p-5">
    <h2 class="text-2xl font-bold text-blue-600 mb-6">MyDashboard</h2>
    <nav class="space-y-3">
      <a href="#" class="block px-4 py-2 rounded-lg hover:bg-blue-100">🏠 Dashboard</a>
      <a href="#" class="block px-4 py-2 rounded-lg hover:bg-blue-100">📊 Laporan</a>
      <a href="#" class="block px-4 py-2 rounded-lg hover:bg-blue-100">⚙️ Pengaturan</a>
      <a href="#" class="block px-4 py-2 rounded-lg hover:bg-blue-100">🚪 Logout</a>
    </nav>
  </aside>

  <!-- Konten -->
  <main class="flex-1 p-6">
    <!-- Navbar -->
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-2xl font-bold text-gray-700">Dashboard</h1>
      <div class="flex items-center gap-3">
        <span class="text-gray-600">Halo, Gendri</span>
        <img src="https://i.pravatar.cc/40" alt="user" class="w-10 h-10 rounded-full">
      </div>
    </div>

    <!-- Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
      <div class="bg-white shadow-md rounded-xl p-5">
        <h3 class="text-lg font-semibold text-gray-600">Total User</h3>
        <p class="text-3xl font-bold text-blue-600 mt-2">120</p>
      </div>
      <div class="bg-white shadow-md rounded-xl p-5">
        <h3 class="text-lg font-semibold text-gray-600">Transaksi</h3>
        <p class="text-3xl font-bold text-green-600 mt-2">Rp 4.500.000</p>
      </div>
      <div class="bg-white shadow-md rounded-xl p-5">
        <h3 class="text-lg font-semibold text-gray-600">Notifikasi</h3>
        <p class="text-3xl font-bold text-red-600 mt-2">15</p>
      </div>
    </div>

    <!-- Tabel -->
    <div class="bg-white shadow-md rounded-xl p-5">
      <h3 class="text-lg font-semibold mb-4">Data Terbaru</h3>
      <table class="w-full text-left border-collapse">
        <thead>
          <tr class="bg-gray-200 text-gray-700">
            <th class="p-3">ID</th>
            <th class="p-3">Nama</th>
            <th class="p-3">Status</th>
            <th class="p-3">Tanggal</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-b">
            <td class="p-3">1</td>
            <td class="p-3">Andi</td>
            <td class="p-3 text-green-600">Sukses</td>
            <td class="p-3">10-09-2025</td>
          </tr>
          <tr class="border-b">
            <td class="p-3">2</td>
            <td class="p-3">Budi</td>
            <td class="p-3 text-yellow-600">Pending</td>
            <td class="p-3">09-09-2025</td>
          </tr>
          <tr>
            <td class="p-3">3</td>
            <td class="p-3">Citra</td>
            <td class="p-3 text-red-600">Gagal</td>
            <td class="p-3">08-09-2025</td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>
</body>
</html>
