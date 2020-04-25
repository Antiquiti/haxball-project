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
                    <input type="image" src="/images/add.png"/><input type="image" src="/images/search.png"/><input type="image" src="/images/filter.png"/>
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
                <div class="notifications"><input type="image" id="notifications-ib" src="/images/bell.png"/></div>
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
                <label id="notify-label">Powiadomienia</label>
                <div class="information-bar"><label>INFORMACJE</label><input type="image" src="/images/hide.png"/></div>
                
                <div class="informations">
                    <div class="single-information"><label>W wyniku tego że pewien albert z chujnych jest debilem prace nad implementacją systemu ligowego postępują z wyraźnym opóźnieniem. W związku z powyższym premiera ligi zostaje przełożona o czas nieokreślony.</label></div>
                    <div class="single-information"><label>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos eveniet vero accusantium necessitatibus quae quam quod eaque quasi quo, iure ipsam laborum consequuntur impedit temporibus blanditiis fugiat eius cupiditate rerum!.</label></div>
                    <div class="single-information"><label>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos eveniet vero accusantium necessitatibus quae quam quod eaque quasi quo, iure ipsam laborum consequuntur impedit temporibus blanditiis fugiat eius cupiditate rerum!.</label></div>
                </div>

                <div class="friends-notifications-bar"><label>ZAPROSZENIA DO GRONA ZNAJOMYCH</label><input type="image" src="/images/hide.png"/></div>

                <div class="friends-requests">

                    <div class="single-friend-request">
                        <div class="friend-avatar-gold" id="id1"></div>
                        <label>Sarada Uchiha</label>
                        <div class="icons"><input type="image" src="/images/accept.png"/><input type="image" src="/images/close.png"/></div>
                    </div>

                    <div class="single-friend-request">
                        <div class="friend-avatar-red" id="id2"></div>
                        <label>Ken Kaneki</label>
                        <div class="icons"><input type="image" src="/images/accept.png"/><input type="image" src="/images/close.png"/></div>
                    </div>

                    <div class="single-friend-request">
                        <div class="friend-avatar-blue" id="id3"></div>
                        <label>Raki</label>
                        <div class="icons"><input type="image" src="/images/accept.png"/><input type="image" src="/images/close.png"/></div>
                    </div>

                    <div class="single-friend-request">
                        <div class="friend-avatar-blue" id="id4"></div>
                        <label>Horo</label>
                        <div class="icons"><input type="image" src="/images/accept.png"/><input type="image" src="/images/close.png"/></div>
                    </div>

                </div>

            </div>
        </div>
        </body>
    </html>
