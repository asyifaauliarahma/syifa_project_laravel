document.getElementById('LoginForm').addEventListener('submit', function(event){
    event.preventDefault();
  
    const correctUsername = "asyifa";
    const correctPassword = "060608";
  
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
  
  
  
    if (username === correctUsername && password === correctPassword){
      alert('Betul Bro');
      window.location.href = 'index';
    }else{
      alert('Username atau password salah')
    }
  });