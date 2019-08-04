<div class="playbar">
            <!-- -----------------------------------NOW_PLAYING_LEFT ------------------------------------->
            <div class="now-playing">
                <div class="track">
                    <span class="album-link">
                        <img src="https://embed.widencdn.net/img/worldkitchen/h1bwzucii9/256x256px/1134734_SW_Storage_Silo_Square_Saltwater-Blue_Medium-Square-Lid_1.tif" alt="" class="album-artwork">
                    </span>
    
                    <div class="track__info">
                        <span class="track__track-name">
                            Happy Birthday
                        </span>
                        <span class="track__artist-name">
                            Áron Berényi
                        </span>
                    </div>
    
                </div>
            </div>
            <!-- ---------------------------------------CENTER PART---------------------------------- -->
            <div class="playbar__center-area"> 
                <!-- Buttons ---------------------------------------->
                <div class="playbar__btns">
                    <!-- SHUFFLE -->
                    <button class="playbar__control-btn btn">
                        <svg class="playbar__icon playbar__icon--shuffle">
                            <use xlink:href="includes/assets/images/sprite.svg#icon-shuffle"></use>
                        </svg>
                    </button>
                    <!-- SKIP LEFT -->
                    <button class="playbar__control-btn btn">
                        <svg class="playbar__icon playbar__icon--arrow">
                            <use xlink:href="includes/assets/images/sprite.svg#icon-previous2"></use>
                        </svg>
                    </button>
                    <!-- ------PLAY------- -->
                    <button class="playbar__control-btn playbar__control-btn--main playbar__control-btn--play btn">
                        <svg class="playbar__icon--play playbar__icon ">
                            <use xlink:href="includes/assets/images/sprite.svg#icon-play3"></use>
                        </svg>
                    </button>                
                    <button class="playbar__control-btn playbar__control-btn--main btn" style="display: none;">
                        <svg class=" playbar__icon ">
                            <use xlink:href="includes/assets/images/sprite.svg#icon-pause2"></use>
                        </svg>
                    </button>
                     <!-- ------SKIP RIGHT------- -->
    
                    <button class="playbar__control-btn btn">
                        <svg class="playbar__icon playbar__icon--arrow">
                            <use xlink:href="includes/assets/images/sprite.svg#icon-next2"></use>
                        </svg>
                    </button>
                    <!-- ------REPEAT------- -->
                    <button class="playbar__control-btn playbar__control-btn--loop btn">
                        <svg class="playbar__icon">
                            <use xlink:href="includes/assets/images/sprite.svg#icon-loop"></use>
                        </svg>
                    </button>           
                </div>
                    <!-- ---------------------------------SONG PROGRESS BAR---------------------------------- -->
                <div class="progress">
                
                    <span class="progress__time progress__time--current">0.00</span>
                    <div class="progress__bar">
                        <div class="progress__bar-bg">
                        <div class="progress__current"></div>
                        </div>
                        
                    </div>
                    <span class="progress__time progress__time--remaining">0.00</span>
                </div>
            </div>
            <!-- --------------------------------RIGHT SIDE CONTROLS------------------------------------ -->
    
                <div class="progress now-playing-right">
                        <button class="playbar__control-btn btn">
                            <svg class="playbar__icon playbar__icon--playlist">
                                <use xlink:href="includes/assets/images/sprite.svg#icon-list"></use>
                            </svg>
                        </button>
                        <button class="playbar__control-btn btn">
                            <svg class="playbar__icon playbar__icon--device">
                                <use xlink:href="includes/assets/images/sprite.svg#icon-display"></use>
                            </svg>
                        </button>
                        <button class="playbar__control-btn btn progress__volume-icon">
                            <svg class="playbar__icon playbar__icon--volume">
                                <use xlink:href="includes/assets/images/sprite.svg#icon-volume-high"></use>
                            </svg>
                        </button>
                        <button class="playbar__control-btn btn progress__volume-icon" style="display:none;">
                            <svg class="playbar__icon playbar__icon--volume">
                                <use xlink:href="includes/assets/images/sprite.svg#icon-volume-medium"></use>
                            </svg>
                        </button>
                        <button class="playbar__control-btn btn progress__volume-icon" style="display:none;">
                            <svg class="playbar__icon playbar__icon--volume">
                                <use xlink:href="includes/assets/images/sprite.svg#icon-volume-low"></use>
                            </svg>
                        </button>
                        <button class="playbar__control-btn btn progress__volume-icon" style="display:none;">
                            <svg class="playbar__icon playbar__icon--volume">
                                <use xlink:href="includes/assets/images/sprite.svg#icon-volume-mute2"></use>
                            </svg>
                        </button>
                    <div class="progress__bar progress__bar--volume">
                        <div class="progress__bar-bg">
                        <div class="progress__current progress__current--volume"></div>
                        </div>
                    </div>
                </div>
           
        </div>
