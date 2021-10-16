<div id="top"></div>


<!-- PROJECT SHIELDS -->
[![Commit Activity][commit-activity-shield]][commit-activity-url]
[![Issues][issues-shield]][issues-url]
[![Pull Request][pull-request-shield]][pull-request-url]
[![License][license-shield]][license-url]



<!-- PROJECT LOGO -->
<br />

<h3 align="center">Qualia</h3>

  <p align="center">
    Platform penghubung Developer/ Tester/ UX Researcher dengan masyarakat umum dalam melakukan aktivitas survey dan testing melalui <i>Customer Experience Narratives (CxNs)</i>
    <br />
    <br />
    <a href="https://github.com/dickyhermawan12/qualia">View Demo</a>
    ·
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
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#acknowledgments">Acknowledgments</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

This repository is a final project repo for Software Engineering Class, Teknik Informatika, Universitas Padjadjaran.

<p align="right">(<a href="#top">back to top</a>)</p>



### Built With

* [Vue.js](https://vuejs.org/)
* [Laravel](https://laravel.com/)
* [Inertia](https://inertiajs.com/)

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- GETTING STARTED -->
## Getting Started

In order to have this project installed and running, you need to install the following:
- Git
- npm
- Composer
- PHP >= 7.3


### Installation and Usage

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
5. Build web assets
   ```sh
    npm run dev
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

_To be added_


<p align="right">(<a href="#top">back to top</a>)</p>



<!-- ROADMAP -->
## Roadmap

- [x] Create project repo

See the [open issues](https://github.com/dickyhermawan12/qualia/issues) for a full list of proposed features (and known issues).

<p align="right">(<a href="#top">back to top</a>)</p>


<!-- LICENSE -->
## License

Distributed under the MIT License. See `LICENSE.txt` for more information.

<p align="right">(<a href="#top">back to top</a>)</p>


<!-- ACKNOWLEDGMENTS -->
## Acknowledgments

_To be added_

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
[license-url]: https://github.com/dickyhermawan12/qualia/blob/master/LICENSE.txt
