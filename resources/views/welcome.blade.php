<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Inventarios - Inicio</title>
    <style>
        :root {
            --primary-color: #2ecc71;
            --secondary-color: #27ae60;
            --accent-color: #e74c3c;
            --light-color: #ecf0f1;
            --dark-color: #2c3e50;
            --warning-color: #f39c12;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        
        body {
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.5;
            padding: 20px;
        }
        
        .container {
            max-width: 1000px;
            margin: 0 auto;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 20px;
        }
        
        header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 35px 20px;
            border-radius: 8px 8px 0 0;
            margin: -20px -20px 20px -20px;
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }
        
        .main-menu {
            display: flex;
            list-style: none;
            gap: 10px;
        }
        
        .main-menu a {
            color: white;
            text-decoration: none;
            padding: 5px 15px;
            border-radius: 4px;
            transition: background-color 0.3s;
            font-size: 0.9rem;
        }
        
        .main-menu a:hover, .main-menu a.active {
            background-color: rgba(255, 255, 255, 0.2);
        }
        
        .welcome-section {
            text-align: center;
            padding: 20px 0;
            margin-bottom: 30px;
        }
        
        .welcome-section h1 {
            color: var(--primary-color);
            margin-bottom: 10px;
            font-size: 1.8rem;
        }
        
        .welcome-section p {
            color: #666;
            margin-bottom: 20px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .cta-button {
            display: inline-block;
            background: var(--warning-color);
            color: white;
            padding: 10px 25px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        
        .cta-button:hover {
            background: #e67e22;
        }
        
        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }
        
        .menu-card {
            background: white;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            transition: all 0.3s;
            cursor: pointer;
        }
        
        .menu-card:hover {
            border-color: var(--primary-color);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        
        .menu-icon {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        
        .menu-card h3 {
            color: var(--primary-color);
            margin-bottom: 10px;
            font-size: 1.1rem;
        }
        
        .menu-card p {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }
        
        .menu-link {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: bold;
            font-size: 0.9rem;
        }
        
        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 15px;
            margin-top: 30px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 8px;
        }
        
        .stat-item {
            text-align: center;
            padding: 15px;
        }
        
        .stat-number {
            font-size: 2rem;
            font-weight: bold;
            color: var(--primary-color);
            margin-bottom: 5px;
        }
        
        .stat-label {
            color: #666;
            font-size: 0.9rem;
        }
        
        footer {
            text-align: center;
            margin-top: 30px;
            padding: 20px;
            color: #666;
            border-top: 1px solid #e9ecef;
            font-size: 0.9rem;
        }
        
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                text-align: center;
                gap: 10px;
            }
            
            .main-menu {
                justify-content: center;
                flex-wrap: wrap;
            }
            
            .menu-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="header-content">
                <div class="logo">📦 SistemaInventarios</div>
                <ul class="main-menu">
                    <li><a href="/" class="active">Inicio</a></li>
                    <li><a href="/bienvenidos">Bienvenidos</a></li>
                    <li><a href="/productos">Productos</a></li>
                    <li><a href="/ventas">Ventas</a></li>
                    <li><a href="/cliente">Cliente</a></li>
                    <li><a href="/proveedor">Proveedor</a></li>
                </ul>
            </div>
        </header>
        
        <main>
            <section class="welcome-section">
                <h1>Bienvenido al Sistema de Inventarios</h1>
                <p>Gestiona productos, ventas, clientes y proveedores de manera eficiente con nuestra plataforma integral.</p>
                <a href="/bienvenidos" class="cta-button">Comenzar Ahora</a>
            </section>
            
            <div class="menu-grid">
                <div class="menu-card" onclick="window.location.href='/productos'">
                    <div class="menu-icon">📦</div>
                    <h3>Gestión de Productos</h3>
                    <p>Administra tu inventario de productos, precios y existencias.</p>
                    <a href="/productos" class="menu-link">Acceder →</a>
                </div>
                
                <div class="menu-card" onclick="window.location.href='/ventas'">
                    <div class="menu-icon">💰</div>
                    <h3>Control de Ventas</h3>
                    <p>Registra y gestiona todas tus ventas y transacciones.</p>
                    <a href="/ventas" class="menu-link">Acceder →</a>
                </div>
                
                <div class="menu-card" onclick="window.location.href='/cliente'">
                    <div class="menu-icon">👥</div>
                    <h3>Administración de Clientes</h3>
                    <p>Mantén un registro completo de todos tus clientes.</p>
                    <a href="/cliente" class="menu-link">Acceder →</a>
                </div>
                
                <div class="menu-card" onclick="window.location.href='/proveedor'">
                    <div class="menu-icon">🏢</div>
                    <h3>Gestión de Proveedores</h3>
                    <p>Administra la información de tus proveedores y compras.</p>
                    <a href="/proveedor" class="menu-link">Acceder →</a>
                </div>
            </div>
            
            <div class="stats">
                <div class="stat-item">
                    <div class="stat-number" id="productos-count">0</div>
                    <div class="stat-label">Productos</div>
                </div>
                
                <div class="stat-item">
                    <div class="stat-number" id="ventas-count">0</div>
                    <div class="stat-label">Ventas Hoy</div>
                </div>
                
                <div class="stat-item">
                    <div class="stat-number" id="clientes-count">0</div>
                    <div class="stat-label">Clientes</div>
                </div>
                
                <div class="stat-item">
                    <div class="stat-number" id="proveedores-count">0</div>
                    <div class="stat-label">Proveedores</div>
                </div>
            </div>
        </main>
        
        <footer>
            <p>Sistema de Inventarios &copy; 2025 - Desarrollado por Vanesa Sabido</p>
        </footer>
    </div>

    <script>
        function updateCounters() {
            const productos = JSON.parse(localStorage.getItem('productos')) || [];
            const ventas = JSON.parse(localStorage.getItem('ventas')) || [];
            const clientes = JSON.parse(localStorage.getItem('clientes')) || [];
            const proveedores = JSON.parse(localStorage.getItem('proveedores')) || [];
            
            document.getElementById('productos-count').textContent = productos.length;
            document.getElementById('ventas-count').textContent = ventas.length;
            document.getElementById('clientes-count').textContent = clientes.length;
            document.getElementById('proveedores-count').textContent = proveedores.length;
        }    
            document.addEventListener('DOMContentLoaded', function() {
            updateCounters();
            setInterval(updateCounters, 3000);
        });
    </script>
</body>
</html>