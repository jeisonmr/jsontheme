# JsonTheme

Es un tema de WordPress moderno que utiliza **Vite** para manejar los activos estáticos como JavaScript, CSS y SCSS. Está diseñado para ofrecer un flujo de trabajo eficiente y una experiencia de desarrollo rápida.

## 🚀 Características

- Compilación rápida de CSS y JavaScript con **Vite**.
- Soporte para CSS y SCSS.
- Fácil integración con WordPress.
- Servidor de desarrollo local con recarga en vivo.

---

## 📁 Estructura del proyecto

```plaintext
wp-content/themes/jsontheme
├── assets/               # Activos del tema
│   ├── css/              # Estilos (CSS o SCSS)
│   ├── images/           # Imágenes del tema
│   │   └── icons/        # Íconos en SVG o PNG
│   └── js/               # JavaScript personalizado
├── dist/                 # Archivos generados para producción
├── templates/            # Archivos de plantillas
│   ├── blocks/           # Bloques personalizados
│   └── parts/            # Partes reutilizables de las plantillas
├── functions.php         # Configuración del tema en WordPress
├── style.css             # Cabecera principal del tema
├── package.json          # Configuración de npm
├── vite.config.js        # Configuración de Vite
└── README.md             # Documentación del proyecto
```

## 🛠️ Configuración
1. Requisitos previos
Asegúrate de tener instalados:

Node.js (versión 18 o superior)
npm (incluido con Node.js)
WordPress configurado en tu entorno de desarrollo (por ejemplo, Local).
2. Instalación
Clona o copia el tema en la carpeta wp-content/themes/ de tu instalación de WordPress.

Navega al directorio del tema:

bash
Copiar código
cd wp-content/themes/jsontheme
Instala las dependencias necesarias:

bash
Copiar código
npm install


## 🧑‍💻 Desarrollo
Inicia el servidor de desarrollo
Ejecuta el siguiente comando para iniciar el servidor de desarrollo con recarga en vivo:

bash
Copiar código
npm run dev
Esto iniciará Vite en el puerto 5173 y cargará los activos desde el servidor de desarrollo.

Carga en WordPress
Asegúrate de que WordPress esté ejecutándose en tu entorno local. Vite cargará los recursos directamente desde su servidor durante el desarrollo.


## 📦 Producción
Cuando estés listo para desplegar el tema, genera los archivos optimizados para producción:

bash
Copiar código
npm run build
Los archivos optimizados se colocarán en la carpeta dist/. WordPress cargará automáticamente estos archivos en lugar de los del servidor de desarrollo.


## ⚙️ Configuración personalizada
Modificar la configuración de Vite
La configuración de Vite se encuentra en el archivo vite.config.js. Puedes personalizarla según tus necesidades, por ejemplo, para agregar soporte a librerías como Tailwind CSS, PostCSS, o manejar otros tipos de archivos.


## 📝 Notas importantes
Durante el desarrollo, asegúrate de que el servidor de Vite está corriendo para cargar correctamente los activos.
En producción, los activos optimizados en dist/ serán cargados automáticamente por WordPress.


## ✨ Créditos
Autor: [Tu Nombre]
Licencia: [ISC o la que prefieras]
Basado en WordPress y Vite.


Este README refleja la nueva estructura de carpetas que incluye las carpetas `assets` y `templates`. Si necesitas agregar más detalles sobre el uso de los bloques o las partes de las plantillas, dímelo para que lo ampliemos. 😊
