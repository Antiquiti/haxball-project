<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="/css/mainpage.css">
    </head>

    <body> 
        <div class="user-panel">
            <div class="logo"><img src="/images/logo.png"/></div>

            <div class="profile-banner">
                <label class="info-label">PROFIL</label>
                <div class="icons">
                    <input type="image" src="/images/settings.png"/><input type="image" src="/images/logout.png"/>
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
                <div class="notifications"><input type="image" src="/images/bell.png"/></div>
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
    </body>
</html>
