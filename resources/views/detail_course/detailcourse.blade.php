<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SMARTEDU</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- custom css link -->
    <link href="{{ asset('css/detailcourse.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/navbars.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="bg-gray-50">
    <div class="container">
        <!-- navbar section starts -->
        @include('dashboard.navbar')
        <!-- navbar section ends -->

        <!-- main section ends -->
        <div class="main-content">
            <div class="header">
                <input type="text" class="search-input" placeholder="Search your course here..." />
                <div class="profile">
                    <div class="profile-info">
                        <h2 class="profile-name">Nabigha Muhana Zayyan</h2>
                        <p class="profile-username">@NabighaMZ</p>
                    </div>
                    <img src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="Profile picture" class="profile-picture" />
                </div>
            </div>
            <div class="content">
                <h1>UI/UX Pemula</h1>
                <p>Kursus Saya / UI/UX Pemula</p>
            </div>

            <div class="chapter">
                <h2>
                    <i class="fas fa-chevron-right toggle"></i> Chapter 0: Course Introduction
                </h2>
                <div class="card-container">
                    <div class="card">
                        <img alt="Video Thumbnail" src="https://storage.googleapis.com/a1aa/image/qbMjNOUJ4tpaAJui86SVKZLjPpCO0Iqz9MeSmfN5J15It2vTA.jpg" />
                        <div class="info">
                            <p>Video Pembelajaran</p>
                            <a href="{{ route('video.belajar') }}">
                                <h3>First Time In This Course</h3>
                            </a>
                            <div class="progress-container">
                                <div class="progress-bar" style="width: 100%;"></div> <!-- Progress Bar -->
                            </div>
                            <div class="author">
                                <img alt="Author Picture" src="https://bootdey.com/img/Content/avatar/avatar5.png" />
                                <span>William Saputra</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="chapter">
                <h2>
                    <i class="fas fa-chevron-right toggle"></i> Chapter 1: UI/UX Introduction
                </h2>
                <div class="card-container">
                    <div class="card">
                        <img alt="Video Thumbnail" src="https://storage.googleapis.com/a1aa/image/qbMjNOUJ4tpaAJui86SVKZLjPpCO0Iqz9MeSmfN5J15It2vTA.jpg" />
                        <div class="info">
                            <p>Video Pembelajaran</p>
                            <a href="{{ route('video.belajar') }}">
                                <h3>Mulai Chapter 1: UI/UX Introduction</h3>
                            </a>
                            <div class="progress-container">
                                <div class="progress-bar" style="width: 50%;"></div> <!-- Progress Bar -->
                            </div>
                            <div class="author">
                                <img alt="Author Picture" src="https://bootdey.com/img/Content/avatar/avatar5.png" />
                                <span>William Saputra</span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <img alt="PDF Thumbnail" src="https://storage.googleapis.com/a1aa/image/qbMjNOUJ4tpaAJui86SVKZLjPpCO0Iqz9MeSmfN5J15It2vTA.jpg" />
                        <div class="info">
                            <p>PDF</p>
                            <h3>Materi Chapter 1</h3>
                            <div class="author">
                                <span>Chapter 1: UI/UX Introduction</span>
                            </div>
                        </div>
                        <button class="download-btn">Unduh</button> <!-- Tombol Unduh di pojok kanan atas -->
                    </div>
                    <div class="card">
                        <img alt="Video Thumbnail" src="https://storage.googleapis.com/a1aa/image/qbMjNOUJ4tpaAJui86SVKZLjPpCO0Iqz9MeSmfN5J15It2vTA.jpg" />
                        <div class="info">
                            <p>Kuis</p>
                            <a href="{{ route('quiz') }}">
                                <h3>Kuis Chapter 1</h3>
                            </a>
                            <div class="progress-container">
                                <div class="progress-bar" style="width: 50%;"></div> <!-- Progress Bar -->
                            </div>
                        </div>
                        <button class="download-btn">Selesai</button> <!-- Tombol Unduh di pojok kanan atas -->
                    </div>
                </div>
            </div>
            <div class="chapter">
                <h2>
                    <i class="fas fa-chevron-right toggle"></i> Chapter 2: UI/UX - Alat yang Digunakan
                </h2>
                <div class="card-container">
                    <div class="card">
                        <img alt="Video Thumbnail" src="https://storage.googleapis.com/a1aa/image/qbMjNOUJ4tpaAJui86SVKZLjPpCO0Iqz9MeSmfN5J15It2vTA.jpg" />
                        <div class="info">
                            <p>Video Pembelajaran</p>
                            <h3>Mulai Chapter 2: Alat yang Digunakan</h3>
                            <div class="progress-container">
                                <div class="progress-bar" style="width: 0%;"></div> <!-- Progress Bar -->
                            </div>
                            <div class="author">
                                <img alt="Author Picture" src="https://bootdey.com/img/Content/avatar/avatar5.png" />
                                <span>William Saputra</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="chapter">
                <h2>
                    <i class="fas fa-chevron-right toggle"></i> Weekly Assignments
                </h2>
                <div class="card-container">
                    <div class="table-container">
                        <table>
                        <thead>
                            <tr>
                            <th>Nama Tugas</th>
                            <th>Link Tugas</th>
                            <th>Deadline</th>
                            <th>Nilai</th>
                            <th>Catatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>Tugas 1</td>
                            <td>
                                <!-- Tombol untuk membuka modal -->
                                <button id="openModal" class="submit-btn">Submit</button>
                            </td>
                            <td>1 Januari 2024, 23:59</td>
                            <td>100</td>
                            <td>Excellent!</td>
                            </tr>
                            <tr>
                            <td>Tugas 2</td>
                            <td>
                                <!-- Tombol untuk membuka modal -->
                                <button id="openModal" class="submit-btn">Submit</button>
                            </td>
                            <td>1 Januari 2024, 23:59</td>
                            <td>80</td>
                            <td>Very Good!</td>
                            </tr>
                        </tbody>
                        </table>
                    </div> 
                </div>       
            </div>

            <div class="chapter">
                <h2>
                    <i class="fas fa-chevron-right toggle"></i> Penyelesaian Kursus: Final Project
                    <span class="badge">TIDAK TERSEDIA</span>
                </h2>
            </div>
            <div class="chapter">
                <h2>
                    <i class="fas fa-chevron-right toggle"></i> Sertifikat Kelulusan
                </h2>
                <div class="card-container">
                    <div class="locked-message">
                        <i class="fas fa-lock"></i>
                        <p>Tidak tersedia dengan syarat: Aktivitas End of Course Feedback dinyatakan selesai</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- main section ends -->

    <!-- footer section starts -->
    @include('dashboard.footer')
    <!-- footer section ends -->

</body>

<!-- javascript -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll(".toggle").forEach((icon) => {
            icon.addEventListener("click", function() {
                const chapter = this.closest(".chapter");
                chapter.classList.toggle("open"); // Toggle 'open' class

                // Toggle the chevron icon direction
                this.classList.toggle("fa-chevron-down");
                this.classList.toggle("fa-chevron-right");
            });
        });
    });
    $(document).ready(function() {
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    });
</script>

</html>