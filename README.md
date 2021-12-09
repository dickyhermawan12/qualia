<div id="top"></div>


<!-- PROJECT SHIELDS -->
[![Commit Activity][commit-activity-shield]][commit-activity-url]
[![Issues][issues-shield]][issues-url]
[![Pull Request][pull-request-shield]][pull-request-url]
[![License][license-shield]][license-url]



<!-- PROJECT LOGO -->
<br />

<div align="center">
  <a href="https://github.com/dickyhermawan12/qualia">
    <img src="public/favicon/android-icon-96x96.png" alt="Logo" width="80" height="80">
  </a>

  <h2 align="center">Qualia</h2>

  <p align="center">
    Real-Time Application Feedback and Testing Platform for Developers and Testers.
    <br />
    <br />
    <a href="https://github.com/dickyhermawan12/qualia/issues">Report Bug</a>
    ·
    <a href="https://github.com/dickyhermawan12/qualia/issues">Request Feature</a>
  </p>
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation-and-running-the-project">Installation and Running the Project</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#credits">Credits</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#acknowledgments">Acknowledgments</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

This repository is a final project repo for Software Engineering Class, Teknik Informatika, Universitas Padjadjaran.


### Built With

* [Vue.js](https://vuejs.org/)
* [Laravel](https://laravel.com/)
* [Inertia](https://inertiajs.com/)
* [React Native](https://reactnative.dev/)
* [Agora](https://agora.io/)

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- GETTING STARTED -->
## Getting Started

### Prerequisites

In order to have this project installed and running, you need to install the following:
- Git
- npm
- Composer
- PHP >= 7.3


### Installation and Running the Project

1. Clone the repo
   ```sh
    git clone https://github.com/dickyhermawan12/qualia.git
   ```
2. Install Composer dependencies
   ```sh
    composer install
   ```
3. Install NPM packages
   ```sh
    npm install
   ```
4. Configure database credentials in `.env` and change the required fields. You may create the database on your local machine and connect to it
   ```sh
    DB_HOST=your-db-server-hostname
    DB_DATABASE=your-db-name
    DB_USERNAME=your-db-server-username
    DB_PASSWORD=your-db-server-password-for-the-designated-username
   ```
5. Build web assets and run vcon service
   ```sh
    npm run ignite
   ```
6. Run database migrations
   ```sh
    php artisan migrate
   ```
7. Start local development server
   ```sh
    php artisan serve
   ```

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- USAGE EXAMPLES -->
## Usage

1. Register for a new account.
2. You will initially be given access to a personal team. You may want to create a new team and invite other user by email.
3. Create a project corresponding to your team.
4. Arrange new live session for your project. Fill the participant identity and start the live session by clicking **Join**.
5. Now enjoy the real-time interaction with video and chat feature for your feedback and live testing session! 


<p align="right">(<a href="#top">back to top</a>)</p>



<!-- ROADMAP -->
## Roadmap

- [x] Create project repo
- [x] Form account, project, and live session schematics and implementations
- [x] Integrate video conferencing and chat feature using Agora

See the [open issues](https://github.com/dickyhermawan12/qualia/issues) for a full list of proposed features (and known issues).

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- CREDITS -->
## Credits

| NPM           | Name        |
| ------------- |-------------|
| 140810190001  | Dicky Rahma Hermawan |
| 140810190005  | Mohamad Fahrio Ghanial Fatihah |
| 140810190033  | Chandra Wijaya |
| 140810190045  | Adam Din Naufan |
| 140810190058  | Alfathar Yusvi Habibillah |

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- LICENSE -->
## License

Distributed under the MIT License. See `LICENSE.txt` for more information.

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- ACKNOWLEDGMENTS -->
## Acknowledgments

* [Microsoft Azure](https://azure.microsoft.com/)
* [Heroicons](https://heroicons.com/)
* [Webpack](https://webpack.js.org/)
* [Vue Loader](https://vue-loader.vuejs.org/)
* [TailwindCSS](https://tailwindcss.com/)

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[commit-activity-shield]: https://img.shields.io/github/commit-activity/w/dickyhermawan12/qualia?style=flat-square
[commit-activity-url]: https://github.com/dickyhermawan12/qualia/graphs/commit-activity
[issues-shield]: https://img.shields.io/github/issues/dickyhermawan12/qualia.svg?style=flat-square
[issues-url]: https://github.com/dickyhermawan12/qualia/issues
[pull-request-shield]: https://img.shields.io/github/issues-pr/dickyhermawan12/qualia?style=flat-square
[pull-request-url]: https://github.com/dickyhermawan12/qualia/pulls
[license-shield]: https://img.shields.io/github/license/dickyhermawan12/qualia.svg?style=flat-square
[license-url]: https://github.com/dickyhermawan12/qualia/blob/main/LICENSE.txt
