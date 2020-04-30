<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="/css/mainpage.css">
        <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <script src="/js/app.js"></script>
    </head>

    <body> 
        <div class="user-panel">
            <div class="logo"><img src="/images/logo.png"/></div>

            <div class="profile-banner">
                <label class="info-label">PROFIL</label>
                <div class="icons">
                    <input type="image" id="settings-ib" src="/images/settings.png"/><input type="image" src="/images/logout.png"/>
                </div>
            </div>

            <div class="user-info">
                <div class="user-avatar"></div>
                <label>Antiquity</label>
            </div>

            <div class="friends-banner">
                <label class="info-label">ZNAJOMI</label>
                <div class="icons">
                    <input type="image" id="add-friend-ib" src="/images/add.png"/><input type="image" src="/images/search.png"/><input type="image" src="/images/filter.png"/>
                </div>
            </div>

            <div class="friends-list">

                <div class="single-friend">
                    <div class="friend-avatar-red">
                        <div class="online"></div>
                    </div>
                    <label>Antiquity 1</label>
                </div>

                <div class="single-friend">
                    <div class="friend-avatar-red">
                        <div class="online"></div>
                    </div>
                    <label>Antiquity 2</label>
                </div>

                <div class="single-friend">
                    <div class="friend-avatar-blue">
                        <div class="online"></div>
                    </div>
                    <label>Leluch Lampuge</label>
                </div>

                <div class="single-friend">
                    <div class="friend-avatar-blue">
                        <div class="online"></div>
                    </div>
                    <label>dappo</label>
                </div>

                <div class="single-friend">
                    <div class="friend-avatar-gold">
                        <div class="online"></div>
                    </div>
                    <label>Antiquity 3</label>
                </div>

                <div class="single-friend">
                    <div class="friend-avatar-gold">
                        <div class="online"></div>
                    </div>
                    <label>Nani?</label>
                </div>

            </div>
        </div>

        <div class="page-content">
            <nav>
                <button class="primitive-button">GRAJ</button>
                <div><a href="/">STRONA GŁÓWNA</a></div>
                <div><a href="/">RANKING</a></div>
                <div><a href="/">FORUM</a></div>
                <div class="notifications-icon"><input type="image" id="notifications-ib" src="/images/bell.png"/></div>
            </nav>
            <div class="separator"></div>
            <div class="slideshow">
                <div class="current-slide"></div>
                <div class="slide"></div>
                <div class="slide"></div>
            </div>
        </div>

        <div class="settings-background">
            <div class="settings">
                <div class="nav-settings">
                    <div class="nav-settings-element"><div class="current-element"></div><label>Zmień zdjęcie</label></div>
                    <div class="nav-settings-element"><label>Zmień hasło</label></div>
                    <div class="nav-settings-element"><label>Zmień nazwę gracza</label></div>
                    <div class="nav-settings-element"><label>Ustawienia aplikacji</label></div>
                </div>

                <div class="change-photo">
                    <label>Zmień zdjęcie</label>
                    <label id="info">Kliknij na swoje obecne zdjęcie aby je zmienić. Rozmiar zdjęcia musi wynosić 200 na 200 pikseli.</label>
                    <div class="avatar-center"><div class="avatar-big"></div></div>
                    <button class="primitive-button">ZATWIERDŹ</button>
                </div>
            </div>
        </div>

        <div class="notifications-background">
            <div class="notifications-window">
                <label class="window-title-label">Powiadomienia</label>
                <div class="gray-separator"></div>

                <div class="notifications">
                    <div class="single-notification">
                        <div class="single-notification-message">
                            <img src="/images/notification.png"/>
                            <label>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur non numquam pariatur repellat, quae illo! Recusandae, tempora repellat voluptatem sint ducimus in. Dolores amet, esse saepe eligendi culpa mollitia earum.</label>
                        </div>
                        <label class="creation-time">20 minut temu</label>       
                    </div>

                    <div class="single-notification">
                        <div class="single-notification-message">
                            <img src="/images/notification.png"/>
                            <label>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde animi blanditiis pariatur reiciendis excepturi ipsam harum nulla porro eius rerum quam deserunt, hic ut eaque dignissimos, ratione nihil debitis maxime?</label>
                        </div>
                        <label class="creation-time">21 Kwiecień 2020</label>    
                    </div>

                    <div class="single-notification">
                        <div class="single-notification-message">
                            <img src="/images/notification.png"/>
                            <label>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat quos autem culpa magni! Provident assumenda consequatur nihil quibusdam fugit illum eligendi suscipit perspiciatis iusto dolore alias perferendis, beatae impedit sapiente, tenetur quae corporis nemo fugiat voluptatem eum reiciendis eos neque eveniet minima! Numquam laboriosam nulla quisquam obcaecati, reiciendis, culpa quis, rem voluptatibus ducimus labore temporibus nesciunt unde. Pariatur, consectetur suscipit dolores eaque adipisci ducimus tempora fugit saepe nihil, in corrupti omnis cupiditate distinctio vero cum impedit dignissimos a? Consequatur nesciunt officiis ullam sequi harum reiciendis adipisci quibusdam iste iure rerum! Asperiores repudiandae ipsa praesentium odit perferendis quis eaque assumenda quod!</label>
                        </div>
                        <label class="creation-time">19 Kwiecień 2020</label>    
                    </div>

                    <div class="single-notification">
                        <div class="single-notification-message">
                            <img src="/images/notification.png"/>
                            <label>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum optio reiciendis corporis pariatur magnam deserunt dolorem omnis cum doloremque numquam cupiditate, dolor dignissimos est fugit. Quae voluptatem dolor doloribus aspernatur, id sit amet laudantium, impedit hic quibusdam quidem. Hic tempora, nam est aliquid inventore, blanditiis odio asperiores ex impedit sint dolorum praesentium modi molestiae, fuga consequatur ipsa libero ratione similique.</label>
                        </div>
                        <label class="creation-time">10 Styczeń 2020</label>    
                    </div>
                </div>
            </div>
        </div>

        <div class="add-friend-background">
            <div class="add-friend-window">
                <label class="window-title-label">Dodaj znajomych</label>
                <div class="gray-separator"></div>
                <div class="search-user-container">
                    <img src="/images/search-gray.png"/>
                    <input type="text" class="search-user" placeholder="Nazwa gracza"/>
                </div>

                <div class="invited-players">
                    <div class="single-friend-request">
                        <div class="friend-avatar-gold" id="id1"></div>
                        <label>Sarada Uchiha</label>
                        <input type="image" src="/images/invite-disabled.png"/>
                    </div>

                    <div class="single-friend-request">
                        <div class="friend-avatar-blue" id="id2"></div>
                        <label>Ken Kaneki</label>
                        <input type="image" src="/images/invite.png"/>
                    </div>

                    <div class="single-friend-request">
                        <div class="friend-avatar-red" id="id3"></div>
                        <label>Raki</label>
                        <input type="image" src="/images/invite.png"/>
                    </div>

                    <div class="single-friend-request">
                        <div class="friend-avatar-blue" id="id4"></div>
                        <label>Horo</label>
                        <input type="image" src="/images/invite.png"/>
                    </div>

                    <div class="single-friend-request">
                        <div class="friend-avatar-blue" id="id4"></div>
                        <label>Horo</label>
                        <input type="image" src="/images/invite.png"/>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
