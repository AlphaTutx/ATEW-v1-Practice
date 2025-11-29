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
    <title>GameVault - Steam Style</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
      body {
        background: linear-gradient(145deg, #0b121d, #121a2b);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
        width: 100vw;
        overflow-x: hidden;
      }
      .carousel::-webkit-scrollbar {
        height: 8px;
      }
      .carousel::-webkit-scrollbar-track {
        background: transparent;
      }
      .carousel::-webkit-scrollbar-thumb {
        background: #4f8cff;
        border-radius: 10px;
      }
      .game-card:hover .overlay {
        opacity: 1;
        transform: translateY(0);
      }
      .overlay {
        transition: all 0.3s ease;
        opacity: 0;
        transform: translateY(20px);
      }
      .full-width-wrapper {
        width: 100vw;
        margin-left: calc(-50vw + 50%);
        padding: 0 10px;
        box-sizing: border-box;
      }
      .neon-border {
        border: 2px solid rgba(0, 255, 255, 0.1);
        box-shadow: 0 0 12px rgba(0, 255, 255, 0.15);
        transition: box-shadow 0.3s ease, border-color 0.3s ease;
      }
      .neon-border:hover {
        border-color: rgba(0, 255, 255, 0.5);
        box-shadow: 0 0 20px rgba(0, 255, 255, 0.4);
      }

      #searchInput {
      transition: 0.25s ease;
      backdrop-filter: blur(6px);
      }

      #searchInput:hover {
      border-color: rgba(0, 255, 255, 0.45);
      box-shadow: 0 0 12px rgba(0, 255, 255, 0.25);
      }

      #searchInput:focus {
      border-color: rgba(0, 255, 255, 0.9);
       box-shadow: 0 0 25px rgba(0, 255, 255, 0.55);
      }

    </style>

    </head>

  <body class="text-gray-300">
    <div class="full-width-wrapper">


      <header class="flex items-center justify-between px-6 py-4 bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 shadow-xl sticky top-0 z-50 backdrop-blur-md">
       
        <div class="text-3xl font-extrabold text-cyan-400 tracking-wider drop-shadow-md animate-pulse" >Alpha Tutx GameVault</div>
        <nav class="hidden md:flex space-x-6 text-gray-300">
          <a href="login.php" class="hover:text-cyan-400 transition font-semibold">Home</a>
          <a href="https://www.facebook.com/profile.php?id=100087598551338" class="hover:text-cyan-400 transition font-semibold">Fb Page</a>
          <a href="#" class="hover:text-cyan-400 transition font-semibold">Request a game</a>
          <a href="#" class="hover:text-cyan-400 transition font-semibold">Game Support/Fix</a>

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
    <img src="img/batman-arkham-premium.jpg" alt="Batman Arkham Knight Premium Edition" class="w-full h-48 object-cover">
    <div class="overlay absolute inset-0 backdrop-blur-md bg-black/60 flex flex-col justify-end p-4 text-white">
      <h3 class="text-xl font-bold">Batman Arkham Knight Premium Edition</h3>
      <p class="text-sm text-gray-300">Action-Adventure</p>
      <a href="https://drive.google.com/file/d/1A7nzFnYkmFvk7DV93IsjuGwIJmryKUMs/view?usp=drive_link" class="mt-3 inline-block bg-cyan-600 hover:bg-cyan-700 px-4 py-2 rounded-md text-sm font-semibold transition shadow-lg">Download</a>
    </div>
  </div>

  <!-- Featured Game 2 -->
  <div class="relative game-card min-w-[300px] rounded-2xl overflow-hidden shadow-2xl cursor-pointer neon-border">
    <img src="img/gow-rag-deluxe.jpg" alt="God of War Ragnarok Deluxe Edition" class="w-full h-48 object-cover">
    <div class="overlay absolute inset-0 backdrop-blur-md bg-black/60 flex flex-col justify-end p-4 text-white">
      <h3 class="text-xl font-bold">God of War Ragnarok Deluxe Edition</h3>
      <p class="text-sm text-gray-300">Action-Adventure</p>
      <a href="https://drive.google.com/file/d/1yZsTmM7gRjtpKgQqZ8WCjfMm8dVZYOzI/view?usp=drive_link" class="mt-3 inline-block bg-cyan-600 hover:bg-cyan-700 px-4 py-2 rounded-md text-sm font-semibold transition shadow-lg">Download</a>
    </div>
  </div>

  <!-- Featured Game 3 -->
  <div class="relative game-card min-w-[300px] rounded-2xl overflow-hidden shadow-2xl cursor-pointer neon-border">
    <img src="img/got-director's-cut.jpeg" alt="Ghost of Tsushima Director's Cut" class="w-full h-48 object-cover">
    <div class="overlay absolute inset-0 backdrop-blur-md bg-black/60 flex flex-col justify-end p-4 text-white">
      <h3 class="text-xl font-bold">Ghost of Tsushima Director's Cut</h3>
      <p class="text-sm text-gray-300">Action-Adventure</p>
      <a href="#" class="mt-3 inline-block bg-cyan-600 hover:bg-cyan-700 px-4 py-2 rounded-md text-sm font-semibold transition shadow-lg">Download</a>
    </div>
  </div>
</div>

  <!-- End of featured Games -->

        <!-- All Games Grid -->
        <section>

          <h2 class="text-4xl font-extrabold mb-6 text-cyan-400">🎮 All Games</h2>

          <div id="gamesGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/CYBERPUNK.jpg" alt="Cyberpunk 2077 Phantom Liberty" class="w-full h-48 object-cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Cyberpunk 2077 Phantom Liberty</h3>
                <p class="text-gray-400 text-sm mb-4">	Action role-playing</p>
                <a href="https://drive.google.com/file/d/17nxPJZOwzZtrKimHDfWH49F61mYhkQXx/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>
            <!-- Add more cards here -->

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/gtav-enhanced.jpg" alt="GTA V Enhanced" class="w-full h-48 object-cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">GTA V Enhanced</h3>
                <p class="text-gray-400 text-sm mb-4">Action-Adventure</p>
                <a href="https://drive.google.com/file/d/15YGlhqSo8nmTmgdxEfZ5QFaDaTS4VrOn/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/hogwarts-def.jpeg" alt="Hogwarts Legacy Definitive Edition" class="w-full h-48 object-cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Hogwarts Legacy Definitive Edition</h3>
                <p class="text-gray-400 text-sm mb-4">Open-World Action RPG</p>
                <a href="https://drive.google.com/file/d/1We0FWlvyOAx4BCXkw3UWrV7koFJ0AXIa/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/rdr1.jpg" alt="Red Dead Redemption" class="w-full h-48 object-cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Red Dead Redemption</h3>
                <p class="text-gray-400 text-sm mb-4">Action-Adventure</p>
                <a href="https://drive.google.com/file/d/1NbDaOrBNNmbxje87TJqrcbxFUOIfR8SR/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/cod-w2.png" alt="Call of Duty Modern Warfare 2" class="w-full h-48 object-cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Call of Duty Modern Warfare 2</h3>
                <p class="text-gray-400 text-sm mb-4">First-Person Shooter</p>
                <a href="https://drive.google.com/file/d/1JG1jX5rN3rPIJaaz1qgrMCr0rwyedtAO/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/cod-w3.jpg" alt="Call of Duty Modern Warfare 3" class="w-full h-48 object-cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Call of Duty Modern Warfare 3</h3>
                <p class="text-gray-400 text-sm mb-4">First-Person Shooter</p>
                <a href="https://drive.google.com/file/d/1e7xq5z1_Wm6IqHSt74Jfr8S0tP1TMJyc/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/tl.jpeg" alt="Torchlight" class="w-full h-48 object-cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Torchlight</h3>
                <p class="text-gray-400 text-sm mb-4">Action role-playing</p>
                <a href="https://drive.google.com/file/d/1Jo4cA2k0qLC9fYp7JNsbvkC3EiKBRMmh/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/tl2.jpg" alt="Torchlight 2" class="w-full h-48 object-cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Torchlight 2</h3>
                <p class="text-gray-400 text-sm mb-4">Action role-playing</p>
                <a href="https://drive.google.com/file/d/1Fn5fGwnF43rgQAMfYl6N2QQUX5jWS599/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/days-gone.jpg" alt="Days Gone" class="w-full h-48 object-cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Days Gone</h3>
                <p class="text-gray-400 text-sm mb-4">Action-Adventure</p>
                <a href="https://drive.google.com/file/d/1mE9IJG7WvFNU6yB6G1_tVVakzLm_msWS/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/far-cry3.jpg" alt="Far Cry 3" class="w-full h-48 object-cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Far Cry 3</h3>
                <p class="text-gray-400 text-sm mb-4">First-person shooter</p>
                <a href="https://drive.google.com/file/d/1MW2CC3tc-XrOkqz9W4t8U2LsI1XpgpT9/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/mafia3-def.jpg" alt="Mafia III Definitive Edition" class="w-full h-48 object-cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Mafia III Definitive Edition</h3>
                <p class="text-gray-400 text-sm mb-4">Action-Adventure</p>
                <a href="https://drive.google.com/file/d/1AJJNF6ratNOTeoM7Q-cMcokAnZJNe5rr/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <!-- Game Card Template -->
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/mhoj2.jpg" alt="My Hero One's Justice 2" class="w-full h-48 object-cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">My Hero One's Justice 2</h3>
                <p class="text-gray-400 text-sm mb-4">Fighting</p>
                <a href="https://drive.google.com/file/d/1iLyy74WklLix9pfEG-0muK-W6eFCGDQW/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/nfs-the-run.jpeg" alt="Need for Speed The Run" class="w-full h-48 object-cover">
              <div class="p-5">
              <h3 class="font-bold text-xl text-white mb-1">Need for Speed The Run</h3>
              <p class="text-gray-400 text-sm mb-4">Racing</p>
              <a href="https://drive.google.com/file/d/1ywf-bJbrIcUggpXhFW3Pj_tI81BkPnXj/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white py-2 px-4 rounded-md">Download</a>
            </div>

          </div>

        <!-- Copy more cards below -->

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/nba2k13.jpg" alt="NBA 2k13" class="w-full h-48 object-cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">NBA 2k13</h3>
                <p class="text-gray-400 text-sm mb-4">Sports</p>
                <a href="https://drive.google.com/file/d/18O3wdTHHBAIRx2_u5eX3f2v1OWmHEhLk/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/re4.jpg" alt="Resident Evil 4" class="w-full h-48 object-cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Resident Evil 4</h3>
                <p class="text-gray-400 text-sm mb-4">Survival horror, third-person shooter</p>
                <a href="https://drive.google.com/file/d/1D_GRJjB8bNWrKNhVOz0TgAw7sQZ3Ptfc/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>
      
            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/proj-zomboid.jpg" alt="Project Zomboid" class="w-full h-48 object-cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Project Zomboid</h3>
                <p class="text-gray-400 text-sm mb-4">Survival, RPG</p>
                <a href="https://drive.google.com/file/d/1caLx7MJi84Upg0jI7gDsWjJtLksDmQS4/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/wwe2k22.jpg" alt="WWE 2k22" class="w-full h-48 object-cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">WWE 2k22</h3>
                <p class="text-gray-400 text-sm mb-4">Sports</p>
                <a href="https://drive.google.com/file/d/17nWtqdN5u8_EQhaW0--OaYcQmAHGz4xg/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/wd2.png" alt="Watch Dogs 2" class="w-full h-48 object-cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Watch Dogs 2</h3>
                <p class="text-gray-400 text-sm mb-4">Action-Adventure</p>
                <a href="https://drive.google.com/file/d/17nWtqdN5u8_EQhaW0--OaYcQmAHGz4xg/view?usp=drive_link" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/lfd.jpg" alt="Left 4 Dead" class="w-full h-48 object-cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">Left 4 Dead</h3>
                <p class="text-gray-400 text-sm mb-4">First-person shooter</p>
                <a href="https://www.mediafire.com/file/k6d4k4g5u5857by/LEFT_4_DEAD-PR.rar/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
              </div>
            </div>

            <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden shadow-xl neon-border">
              <img src="img/nba2k14.jpg" alt="NBA 2k14" class="w-full h-48 object-cover">
              <div class="p-5">
                <h3 class="font-bold text-xl text-white mb-1">NBA 2k14</h3>
                <p class="text-gray-400 text-sm mb-4">Sports</p>
                <a href="https://www.mediafire.com/file/ailcdckvsmxi4qq/2k14_Default.zip/file" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">Download</a>
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

  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>

      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>

  	<?php endif ?>

</div>

</body>
</html>