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
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Alpha Tutx GameVault</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style2.css">

    <!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>

      
      	<marquee behavior="" direction="">
          <h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
        </marquee>
      

  	<?php endif ?>

    <!-- END of notification message -->
     
</head>


  <body class="text-gray-300">

    <div class="full-width-wrapper">




      <header class="flex items-center justify-between px-6 py-4 bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 shadow-xl sticky top-0 z-50 backdrop-blur-md">
       
        <div class="text-3xl font-extrabold text-cyan-400 tracking-wider drop-shadow-md animate-pulse" >Alpha Tutx GameVault</div>

        <nav class="hidden md:flex space-x-6 text-gray-300">
          <a href="login.php" class="hover:text-cyan-400 transition font-semibold">PC Games</a>
          <a href="cp-games.html" class="hover:text-cyan-400 transition font-semibold">CP Games</a>
          <a href="premium-cp-apps.html" class="hover:text-cyan-400 transition font-semibold">Premium CP Apps</a>        
          <a href="gamesuppfix.html" class="hover:text-cyan-400 transition font-semibold">Game Support/Fix</a>
          <a href="18-section.html" class="hover:text-cyan-400 transition font-semibold">18+ Section</a>
          <a href="https://www.facebook.com/profile.php?id=100087598551338" target="_blank" class="hover:text-cyan-400 transition font-semibold">Fb Page</a>
          <a href="https://docs.google.com/spreadsheets/d/14crWaue7VCDUBApUCCkyZkLNzjpLTrjKyMYSNzY_8jc/edit?usp=drive_link" target="_blank" class="hover:text-cyan-400 transition font-semibold">Request a game</a>

		  <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p> <a href="login.php?logout='1'" style="color: red;">Logout</a> </p>
    <?php endif ?>
			<!-- End logged in user information -->

        </nav>
        <button class="md:hidden text-gray-400 hover:text-white focus:outline-none" aria-label="Menu">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
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

        <h2 class="text-4xl font-extrabold mb-6 text-cyan-400">Hot Games</h2>
        <div class="carousel flex space-x-6 overflow-x-auto pb-4">

          <!-- Featured Game 1 -->
 
  <div class="relative game-card min-w-[300px] rounded-2xl overflow-hidden shadow-2xl cursor-pointer neon-border">
    <img src="img/batman-arkham-premium.jpg" alt="Batman Arkham Knight Premium Edition" class="w-full h-48 object-fit: cover">
    <div class="overlay absolute inset-0 backdrop-blur-md bg-black/60 flex flex-col justify-end p-4 text-white">
      <h3 class="text-xl font-bold">Batman Arkham Knight Premium Edition</h3>
      <p class="text-sm text-red-300">ZIP FILE SIZE: 50.35 GB</p>
      <a href="https://drive.google.com/file/d/1A7nzFnYkmFvk7DV93IsjuGwIJmryKUMs/view?usp=drive_link" target="_blank" class="mt-3 inline-block bg-cyan-600 hover:bg-cyan-700 px-4 py-2 rounded-md text-sm font-semibold transition shadow-lg">Download</a>
    </div>
  </div>

  <!-- Featured Game 2 -->
  <div class="relative game-card min-w-[300px] rounded-2xl overflow-hidden shadow-2xl cursor-pointer neon-border">
    <img src="img/gow-rag-deluxe.jpg" alt="God of War Ragnarok Deluxe Edition" class="w-full h-48 object-fit: cover">
    <div class="overlay absolute inset-0 backdrop-blur-md bg-black/60 flex flex-col justify-end p-4 text-white">
      <h3 class="text-xl font-bold">God of War Ragnarok Deluxe Edition</h3>
      <p class="text-sm text-red-300">ZIP FILE SIZE: 110.09 GB</p>
      <a href="https://drive.google.com/file/d/1yZsTmM7gRjtpKgQqZ8WCjfMm8dVZYOzI/view?usp=drive_link" target="_blank" class="mt-3 inline-block bg-cyan-600 hover:bg-cyan-700 px-4 py-2 rounded-md text-sm font-semibold transition shadow-lg">Download</a>
    </div>
  </div>

  <!-- Featured Game 3 -->
  <div class="relative game-card min-w-[300px] rounded-2xl overflow-hidden shadow-2xl cursor-pointer neon-border">
    <img src="img/got-director's-cut.jpeg" alt="Ghost of Tsushima Director's Cut" class="w-full h-48 object-fit: cover">
    <div class="overlay absolute inset-0 backdrop-blur-md bg-black/60 flex flex-col justify-end p-4 text-white">
      <h3 class="text-xl font-bold">Ghost of Tsushima Director's Cut</h3>
      <p class="text-sm text-red-300">ZIP FILE SIZE: 45.97 GB</p>
      <a href="https://drive.google.com/file/d/1CfIB34dGlA875YJO9_O20BSnUANe7bbD/view?usp=drive_link" target="_blank" class="mt-3 inline-block bg-cyan-600 hover:bg-cyan-700 px-4 py-2 rounded-md text-sm font-semibold transition shadow-lg">Download</a>
    </div>
  </div>
</div>

  <!-- End of featured Games -->

        <!-- All Games Grid -->
        <section>

          <h2 class="text-4xl font-extrabold mb-6 text-cyan-400">🎮 All PC Games</h2>

          <div id="gamesGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/CYBERPUNK.jpg" alt="Cyberpunk 2077 Phantom Liberty" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Cyberpunk 2077 Phantom Liberty</h3>
                <p class="text-red-400 text-sm mb-4">ZIP FILE SIZE: 89.08 GB</p>
                <a href="https://drive.google.com/file/d/17nxPJZOwzZtrKimHDfWH49F61mYhkQXx/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=DV_ekMpWNb0" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>
            <!-- Add more cards here -->

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/gtav-enhanced.jpg" alt="GTA V Enhanced" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">GTA V Enhanced</h3>
                <br>
                <p class="text-red-400 text-sm mb-4">ZIP FILE SIZE: 88.18 GB</p>
                <a href="https://drive.google.com/file/d/15YGlhqSo8nmTmgdxEfZ5QFaDaTS4VrOn/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=wB5Xt_2Rh9M" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/hl-de.jpg" alt="Hogwarts Legacy Definitive Edition" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Hogwarts Legacy Definitive Edition</h3>
                <p class="text-red-400 text-sm mb-4">ZIP FILE SIZE: 72.37 GB</p>
                <a href="https://drive.google.com/file/d/1We0FWlvyOAx4BCXkw3UWrV7koFJ0AXIa/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=ugEh2RWQP9Y" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/rdr1.jpg" alt="Red Dead Redemption" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Red Dead Redemption</h3>
                <br>
                <p class="text-red-400 text-sm mb-4">ZIP FILE SIZE: 8.4 GB</p>
                <a href="https://drive.google.com/file/d/1NbDaOrBNNmbxje87TJqrcbxFUOIfR8SR/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=CeVvuyXuAJk" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/cod-w2.png" alt="Call of Duty Modern Warfare 2" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Call of Duty Modern Warfare 2</h3>
                <p class="text-red-400 text-sm mb-4">ZIP FILE SIZE: 14.44 GB</p>
                <a href="https://drive.google.com/file/d/1JG1jX5rN3rPIJaaz1qgrMCr0rwyedtAO/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=r2ut6_aoRIE&list=PLyex3XU-d_c8Ah_QWWcYu8Sffbpc6VoGw" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/cod-w3.jpg" alt="Call of Duty Modern Warfare 3" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Call of Duty Modern Warfare 3</h3>
                <p class="text-red-400 text-sm mb-4">ZIP FILE SIZE: 13.68 GB</p>
                <a href="https://drive.google.com/file/d/1e7xq5z1_Wm6IqHSt74Jfr8S0tP1TMJyc/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=g4YrAF8atdE" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/tl.jpeg" alt="Torchlight" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Torchlight</h3>
                <br>
                <p class="text-red-400 text-sm mb-4">ZIP FILE SIZE: 987.3 MB</p>
                <a href="https://drive.google.com/file/d/1Jo4cA2k0qLC9fYp7JNsbvkC3EiKBRMmh/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=GQBTd-YIxBg" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/tl2.jpg" alt="Torchlight 2" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Torchlight 2</h3>
                <br>
                <p class="text-red-400 text-sm mb-4">ZIP FILE SIZE: 1.79 GB</p>
                <a href="https://drive.google.com/file/d/1Fn5fGwnF43rgQAMfYl6N2QQUX5jWS599/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=QGQmwqyiRO0" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/days-gone.jpg" alt="Days Gone" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Days Gone</h3>
                <br>
                <p class="text-red-400 text-sm mb-4">ZIP FILE SIZE: 43.17 GB</p>
                <a href="https://drive.google.com/file/d/1mE9IJG7WvFNU6yB6G1_tVVakzLm_msWS/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=6tR8fq9amOQ&list=PL3AykgGK2_hkLaqLiQ57droRdRPl-3ekm" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/fc3.jpg" alt="Far Cry 3" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Far Cry 3</h3>
                <br>
                <p class="text-red-400 text-sm mb-4">ZIP FILE SIZE: 10.34 GB</p>
                <a href="https://drive.google.com/file/d/1MW2CC3tc-XrOkqz9W4t8U2LsI1XpgpT9/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=8kneDUnueW8" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/m3de.jpg" alt="Mafia III Definitive Edition" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Mafia III Definitive Edition</h3>
                <p class="text-red-400 text-sm mb-4">ZIP FILE SIZE: 36.99 GB</p>
                <a href="https://drive.google.com/file/d/1AJJNF6ratNOTeoM7Q-cMcokAnZJNe5rr/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=SdKc1hHZwvQ" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/mhoj2.jpg" alt="My Hero One's Justice 2" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">My Hero One's Justice 2</h3>
                <br>
                <p class="text-red-400 text-sm mb-4">ZIP FILE SIZE: 10.64 GB</p>
                <a href="https://drive.google.com/file/d/1iLyy74WklLix9pfEG-0muK-W6eFCGDQW/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=WlRsiWq70VI" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/nfs-tr.jpg" alt="Need for Speed The Run" class="w-full h-48 object-fit: cover">
              <div class="p-5">
              <h3 class="font-bold text-xl text-white mb-1">Need for Speed The Run</h3>
              <br>
              <p class="text-red-400 text-sm mb-4">ZIP FILE SIZE: 10.21 GB</p>
              <a href="https://drive.google.com/file/d/1ywf-bJbrIcUggpXhFW3Pj_tI81BkPnXj/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white py-2 px-5 rounded-md">Download</a>
              <a href="https://www.youtube.com/watch?v=izcZ6_K_44s&list=PL4A_rH03rFEAqyPlAb7l54ZUPVZbRZdaI" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
            </div>

          </div>

        <!-- Copy more cards below -->

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/nba2k13.jpg" alt="NBA 2k13" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">NBA 2k13</h3>
                <br>
                <p class="text-red-400 text-sm mb-4">ZIP FILE SIZE: 7.09 GB</p>
                <a href="https://drive.google.com/file/d/18O3wdTHHBAIRx2_u5eX3f2v1OWmHEhLk/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=NTiU5LguzVk" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/res-4.jpg" alt="Resident Evil 4" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Resident Evil 4</h3>
                <br>
                <p class="text-red-400 text-sm mb-4">ZIP FILE SIZE: 2.5 GB</p>
                <a href="https://drive.google.com/file/d/1D_GRJjB8bNWrKNhVOz0TgAw7sQZ3Ptfc/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=4W1oOprhVgo" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>
      
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/proj-zomboid.jpg" alt="Project Zomboid" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Project Zomboid</h3>
                <br>
                <p class="text-red-400 text-sm mb-4">ZIP FILE SIZE: 2.36 GB</p>
                <a href="https://drive.google.com/file/d/1caLx7MJi84Upg0jI7gDsWjJtLksDmQS4/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=4W1oOprhVgo" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/wwe2k22.jpg" alt="WWE 2k22" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">WWE 2k22</h3>
                <br>
                <p class="text-red-400 text-sm mb-4">ZIP FILE SIZE: 52.35 GB</p>
                <a href="https://drive.google.com/file/d/17nWtqdN5u8_EQhaW0--OaYcQmAHGz4xg/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=zR3B143obrM" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/wd-2.jpg" alt="Watch Dogs 2" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Watch Dogs 2</h3>
                <br>
                <p class="text-red-400 text-sm mb-4">ZIP FILE SIZE: 43.99 GB</p>
                <a href="https://drive.google.com/file/d/17nWtqdN5u8_EQhaW0--OaYcQmAHGz4xg/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=DlRFY28ICzI&list=PL4A_rH03rFEAMR5SbNxZssl9FEI2tUxcP" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/lfd.jpg" alt="Left 4 Dead" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Left 4 Dead</h3>
                <br>
                <p class="text-red-400 text-sm mb-4">ZIP FILE SIZE: 6.42 GB</p>
                <a href="https://www.mediafire.com/file/k6d4k4g5u5857by/LEFT_4_DEAD-PR.rar/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=7ktJ3mGZIlc" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/nba2k14.jpg" alt="NBA 2k14" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">NBA 2k14</h3>
                <br>
                <p class="text-red-400 text-sm mb-4">ZIP FILE SIZE: 6.90 GB</p>
                <a href="https://www.mediafire.com/file/ailcdckvsmxi4qq/2k14_Default.zip/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=3mPMm4gvBJQ" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>
              
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/lfd2.jpg" alt="Left 4 Dead 2" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Left 4 Dead 2</h3>
                <br>
                <p class="text-red-400 text-sm mb-4">ZIP FILE SIZE: 9.07 GB</p>
                <a href="https://www.mediafire.com/file/ujml2h5khgwxcmh/LEFT_4_DEAD_2_%2528V_2.2.4%2529-PR-001.zip/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=-HOhGiekrWM" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/mp.png" alt="Max Payne" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Max Payne</h3>
                <br>
                <p class="text-red-400 text-sm mb-4">ZIP FILE SIZE: 1.2 GB</p>
                <a href="https://www.mediafire.com/file/ujml2h5khgwxcmh/LEFT_4_DEAD_2_%2528V_2.2.4%2529-PR-001.zip/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=C_CtiPxLgNo" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/mp2.jpg" alt="Max Payne 2" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Max Payne 2</h3>
                <br>
                <p class="text-red-400 text-sm mb-4">ZIP FILE SIZE: 1.23 GB</p>
                <a href="https://www.mediafire.com/file/ujml2h5khgwxcmh/LEFT_4_DEAD_2_%2528V_2.2.4%2529-PR-001.zip/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=-b1p7P2YIls" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/cs1-6.jpeg" alt="Counter Strike 1.6 [Full]" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Counter Strike 1.6 [Full]</h3>
                <br>
                <p class="text-red-400 text-sm mb-4">ZIP FILE SIZE: 227.85 MB</p>
                <a href="https://www.mediafire.com/file/mg29pd645qtminx/cs16full_v23b_v2_5.rar/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=oIoueckSEtU" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/wc3.jpg" alt="Warcraft III- Frozen Throne [2003]" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Warcraft III - Frozen Throne [2003]</h3>
                <br>
                <p class="text-red-400 text-sm mb-4">ZIP FILE SIZE: 2.15 GB</p>
                <a href="https://www.mediafire.com/file/jpfa5w176zi7rd9/Warcraft_III-_Frozen_Throne_2003_no_CD.rar/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=rVSS7iwLfCw" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/nfs-2.jpg" alt="Need For Speed Underground 2" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Need For Speed Underground 2</h3>
                <br>
                <p class="text-red-400 text-sm mb-4">ZIP FILE SIZE: 285.45 MB</p>
                <a href="https://www.mediafire.com/file/xp9atsxj56z8833/nfs_underground_2.rar/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=RhQCVvNpeQk" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/cs-condzero.jpg" alt="Counter Strike: Condition Zero" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Counter Strike: Condition Zero</h3>
                <br>
                <p class="text-red-400 text-sm mb-4">ZIP FILE SIZE: 699.6 MB</p>
                <a href="https://www.mediafire.com/file/g95ik6xjpyb3p6z/Counter_Strike_Condition_Zero_Deleted_Scenes_Win_Setup_EN.rar/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=ElMmWnx_GSQ" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/ln3.jpg" alt="Little Nightmares 3" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Little Nightmares III</h3>
                <br>
                <br>
                <p class="text-red-400 text-sm mb-4">ZIP FILE SIZE: 12.59 GB</p>
                <a href="https://www.mediafire.com/file_premium/8hw5b6vii3onpee/Little.Nightmares.3.v1.0.rar/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=Ts5dvymVL48" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/ufc-u3.png" alt="UFC: Undisputed 3 + Mods" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">UFC: Undisputed 3 + Mods</h3>
                <br>
                <br>
                <p class="text-red-400 text-sm mb-4">ZIP FILE SIZE: 7.49 GB</p>
                <a href="https://www.mediafire.com/file/6mxgbnr2unt7ul4/UUC+5-+Shock+The+System+V+0.2.0+(The+Stat+Update).rar/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=gzWww3u_FKU" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/t7-ult-ed.jpg" alt="Tekken 7 Ultimate Edition" class="w-full h-48 object-fit: cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Tekken 7 Ultimate Edition</h3>
                <br>
                <br>
                <p class="text-red-400 text-sm mb-4">ZIP FILE SIZE: 47.2 GB</p>
                <a href="https://buzzheavier.com/dwvu7c0fuz4k" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Download</a>
                <a href="https://www.youtube.com/watch?v=m_VsNxPSuok" target="_blank" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-5 rounded-md shadow-md transition">Gameplay</a>
              </div>
            </div>

            <!-- End of Games Grid -->  
            
          </div>
        </section>
      </main>

      <!-- footer -->

      <footer class="text-center text-gray-500 py-6 text-sm border-t border-gray-800">
        <div class="mb-2 text-cyan-500">Thanks for supporting us.</div>
        © 2025 Alpha Tutx GameVault. All rights reserved.
      </footer>

      <!-- footer -->

    </div>

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

  	

</div>
</body>
</html>