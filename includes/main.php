                    <nav class="navbar">
                            <ul class="navbar__items">
                                <li class="navbar__item"><a href="#" class="navbar__link navbar__link--active ">Featured</a></li>
                                <li class="navbar__item"><a href="#" class="navbar__link ">Podcasts</a></li>
                                <li class="navbar__item"><a href="#" class="navbar__link ">Toplists</a></li>
                                <li class="navbar__item"><a href="#" class="navbar__link ">Genres</a></li>
                                <li class="navbar__item"><a href="#" class="navbar__link ">News</a></li>
                                <li class="navbar__item"><a href="#" class="navbar__link ">Discover</a></li>
                            </ul>
                    </nav>
                <section class="recommendations">
                    <h2 class="recommendations__header h2">Recommendations for you</h2>
                    <div class="recommendations__albums">

                            <?php
                               $albumQuery = mysqli_query($con, "SELECT * FROM albums ORDER BY RAND() LIMIT 10");

                                while($row = mysqli_fetch_array($albumQuery)) {

                                    echo "<div class='recommendations__album'>
                                            <a href='album.php?id=" . $row['id'] . "'>
                                                <img class='recommendations__album-cover' src='" . $row['artworkPath'] . "'>
                                            
                                            <div class='recommendations__info'>
                                                " . $row['title'] . "
                                            </div>
                                            </a>
                                        </div>
                                        ";
                                }
                            ?>
                        
                    </div>

                </section>
                <section class="recently-played">
                    <h2 class="recently-played__header h2">Recently played</h2>
                    <div class="recently-played__albums">
                        <div class="recently-played__album">

                        </div>
                    </div>
                </section>


