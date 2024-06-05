document.addEventListener("DOMContentLoaded", function() {
    // Automatically creates active line under 'Bootcamp' item
    const bootcampNavItem = document.querySelector('.nav-item .active');
    const activeLine = document.getElementById('active-line');
    const navItemRect = bootcampNavItem.getBoundingClientRect();
  
    activeLine.style.width = `${navItemRect.width}px`;
    activeLine.style.transform = `translateX(${navItemRect.left}px)`;
  });
  
  function moveActiveLine(element) {
    const activeLine = document.getElementById('active-line');
    const navItem = element.parentElement;
    const navItemRect = navItem.getBoundingClientRect();
  
    activeLine.style.width = `${navItemRect.width}px`;
    activeLine.style.transform = `translateX(${navItemRect.left}px)`;
  
    // Remove 'active' class from all nav-link items
    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(link => link.classList.remove('active'));
  
    // Add 'active' class to the clicked item
    element.classList.add('active');
  }
  
  document.addEventListener('DOMContentLoaded', function() {
    // Tangkap elemen formulir dan tombol
    var signupForm = document.getElementById('signup_form');
    var signupButton = document.getElementById('signup_button');
    var emailInput = document.getElementById('insert_email');
  
    // Tambahkan event listener untuk tombol
    signupButton.addEventListener('click', function() {
      // Arahkan ke tampilan sign up
      window.location.href = "/signup";
    });
  
    // Tambahkan event listener untuk input email
    emailInput.addEventListener('input', function() {
      // Simpan email yang dimasukkan (misalnya di local storage)
      localStorage.setItem('email', emailInput.value);
    });
  
    // Isi kembali input email jika ada yang tersimpan di local storage
    var storedEmail = localStorage.getItem('email');
    if (storedEmail) {
      emailInput.value = storedEmail;
    }
  });  

// category candidates
function handleCardClick(itemId) {
    // Fungsi yang akan dijalankan saat tombol card diklik
    console.log("Card with ID " + itemId + " clicked!");
    // Tambahkan logika atau tindakan tambahan di sini
    // Contoh: redirect ke halaman detail menggunakan window.location.href
    // window.location.href = "/item/" + itemId;
}