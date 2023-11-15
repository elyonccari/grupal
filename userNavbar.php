<nav class="navbar">
  <h1 class="nav-brand">Aplicación ToDoList</h1>
  <ul class="navbar-nav">
    <ul>
        <p><?php echo $_SESSION["email"] ?></p>
    </ul>
    <li class="nav-item">
      <a class="nav-link" href="profile.php">Perfil</a>
    </li>
    <li class="nav-item">
      <a class="nav-link logout" href="logout.php">Cerrar sesión</a>
    </li>
  </ul>
</nav>
<style>
.navbar {
  background-color: #3498db;
  color: red;
  padding: 10px 20px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.nav-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.nav-brand {
  margin: 0;
  font-size: 24px;
}
.nav-brand h1{
  color:red;
}
.navbar-nav {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  align-items: center;
}

.nav-item {
  margin-right: 20px;
}

.nav-link {
  text-decoration: none;
  color: #fff;
  font-weight: bold;
  transition: color 0.3s ease;
}

.nav-link:hover {
  color: #ecf0f1;
}

.logout {
  background-color: #e74c3c;
  padding: 8px 12px;
  border-radius: 5px;
}
.user-email {
  color: #fff; /* Añadido para que el texto sea blanco */
}
</style>