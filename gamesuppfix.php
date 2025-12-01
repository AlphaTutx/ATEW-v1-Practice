<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: index.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game support fix</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style2.css">
</head>

<body class="text-gray-300">
    <div class="full-width-wrapper">

      <header class="flex items-center justify-between px-6 py-4 bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 shadow-xl sticky top-0 z-50 backdrop-blur-md">
       
        <div class="text-3xl font-extrabold text-cyan-400 tracking-wider drop-shadow-md animate-pulse" >Game Support/Fix</div>
        <nav class="hidden md:flex space-x-6 text-gray-300">
          <a href="login.php" class="hover:text-cyan-400 transition font-semibold">Apps for Pc</a>
          <a href="#" class="hover:text-cyan-400 transition font-semibold">Apps for Phones</a>
          <a href="https://www.facebook.com/profile.php?id=100087598551338" target="_blank" class="hover:text-cyan-400 transition font-semibold">Fb Page</a>
          <a href="#" class="hover:text-cyan-400 transition font-semibold">Request a game</a>
          <a href="gamesuppfix.html" class="hover:text-cyan-400 transition font-semibold">Game Support/Fix</a>

		  <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p> <a href="login.php?logout='1'" style="color: red;">Logout</a> </p>
    <?php endif ?>
			<!-- End logged in user information -->
        </nav>

        </header>

        <main class="max-w-7xl mx-auto px-4 py-12 space-y-20">

          <!-- Search Bar -->
<div class="relative w-3/5 mx-auto mb-10">
  <input
    type="text"
    id="searchInput"
    placeholder="Search games..."
    class="w-full py-2.5 pl-12 pr-4 rounded-full bg-gray-900/60 text-white 
           border border-cyan-500/20 backdrop-blur-md shadow-md 
           focus:border-cyan-400 focus:shadow-cyan-400/40 transition-all text-sm outline-none"
  />

  <svg xmlns="http://www.w3.org/2000/svg"
       class="h-5 w-5 text-cyan-300 absolute left-4 top-1/2 -translate-y-1/2 opacity-80"
       fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
    <path stroke-linecap="round" stroke-linejoin="round"
          d="M21 21l-4.35-4.35M10 18a8 8 0 100-16 8 8 0 000 16z"/>
  </svg>
</div>
          <!-- End Search Bar -->

<section>

          <h2 class="text-4xl font-extrabold mb-6 text-red-400">NBA 2k14</h2>

      <div id="gamesGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/missing dll's 2k14.png" alt="Cyberpunk 2077 Phantom Liberty" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">FIX for "msvcp100.dll"</h3>
                <br>
                <br>
                <p class="text-red-400 text-sm mb-4">NBA 2k14 missing dll FIX</p>
                <a href="https://drive.google.com/drive/folders/14uM2zLpxfMjTOR4Qk3fJyR8rDAHNY-0o?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/missing dll's 2k14.png" alt="Cyberpunk 2077 Phantom Liberty" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">FIX for "msvcp120.dll and msvcr120.dll missing"</h3>
                <p class="text-red-400 text-sm mb-4">NBA 2k14 missing dll FIX</p>
                <a href="https://drive.google.com/drive/folders/1XJxH8stm0kVOZ_EH35As_6ZsbPQlpUDV?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/missing dll's 2k14.png" alt="Cyberpunk 2077 Phantom Liberty" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">FIX for "xinput1_3.dll"</h3>
                <br>
                <br>
                <p class="text-red-400 text-sm mb-4">NBA 2k14 FIX</p>
                <a href="https://drive.google.com/drive/folders/1UzsOlw54FnkZF7YUhADOZf5i2TmQq1JQ?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

      </div>
            
</section>

<section>

          <h2 class="text-4xl font-extrabold mb-6 text-red-400">Counter Strike 1.6</h2>

      <div id="gamesGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/missing dll's 2k14.png" alt="Extraction Password for Counter Strike 1.6 [FULL]" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Extraction Password for Counter Strike 1.6 [FULL]</h3>
                <br>
                <p class="text-red-400 text-sm mb-4">Extraction Password</p>
                <a href="https://drive.google.com/file/d/1yVIqtdzEtj_pT2ZwmvzxYK8CmA7XqgHG/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

      </div>
            
</section>

<section>

          <h2 class="text-4xl font-extrabold mb-6 text-red-400">Warcraft III Frozen Throne</h2>

      <div id="gamesGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img2/missing dll's 2k14.png" alt="Warcraft_III Frozen Throne - CD keys" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Warcraft_III Frozen Throne - CD keys</h3>
                <br>
                <p class="text-red-400 text-sm mb-4">CD keys</p>
                <a href="https://docs.google.com/document/d/1-pI3Yti4t3dOmhgpJJYm5rw6Po4jzp70FNXa3J7k08A/edit?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

      </div>
            
</section>

</main>

<!-- Search Filtering Script -->
    
<script>
  const searchInput = document.getElementById("searchInput");
  const gameCards = document.querySelectorAll(".game-card");

  searchInput.addEventListener("keyup", () => {
    const searchValue = searchInput.value.toLowerCase();

    gameCards.forEach(card => {
      const title = card.querySelector("h3").textContent.toLowerCase();
      const genre = card.querySelector("p").textContent.toLowerCase();

      if (title.includes(searchValue) || genre.includes(searchValue)) {
        card.style.display = "block";
      } else {
        card.style.display = "none";
      }
    });
  });
</script>

<!-- END Search Filtering Script -->


</body>
</html>