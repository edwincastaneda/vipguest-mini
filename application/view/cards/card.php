<div id="wrap">
    <div id="sidebar">
        <div id="logo">
            VG
        </div>
        <div id="menu-content">
            <ul id="menu">
                <li class="menu-item">
                    <a href="#">
                        <table class="menu-active">
                            <tr><td><span class="icon icon-photoshoot"></span></td><td class="menu-title">Photoshoot</td></tr>
                        </table>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#">
                        <table>
                            <tr><td><span class="icon icon-rsvp"></span></td><td class="menu-title">RSVP</td></tr>
                        </table>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#">
                        <table>
                            <tr><td><span class="icon icon-registry"></span></td><td class="menu-title">Registry</td></tr>
                        </table>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#">
                        <table>
                            <tr><td><span class="icon icon-car"></span></td><td class="menu-title">Map</td></tr>
                        </table>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#">
                        <table>
                            <tr><td><span class="icon icon-outfit"></span></td><td class="menu-title">Outfit</td></tr>
                        </table>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#">
                        <table>
                            <tr><td><span class="icon icon-playlist"></span></td><td class="menu-title">Playlist</td></tr>
                        </table>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#">
                        <table>
                            <tr><td><span class="icon icon-quotes"></span></td><td class="menu-title">Quotes</td></tr>
                        </table>
                    </a>
                </li>
            </ul>

        </div>


    </div>
    <div id="content">
        <div id="card-title">
            <div id="card-desc" class="left text-left">
            <?php if (isset($card->description)) echo htmlspecialchars($card->description, ENT_QUOTES, 'UTF-8'); ?>
            </div>
            <div id="card-counter" class="right text-center">
                <span class="float-left">RESTAN:</span> 
                <table class="counter text-left">
                    <tr>
                        <td class="counter-data" data-dias></td>
                        <td class="counter-data" data-horas></td>
                        <td class="counter-data" data-mins></td>
                        <td class="counter-data" data-segs></td>
                    </tr>
                    <tr>
                        <td class="counter-desc" txt-dias></td>
                        <td class="counter-desc" txt-horas></td>
                        <td class="counter-desc" txt-mins></td>
                        <td class="counter-desc" txt-segs></td>
                    </tr>
                </table>

            </div>

        </div>
        <div id="card">
            <div id="pagination">
                <div id="page-left" class="float-left text-center"><a href="#">Anterior</a></div>
                <div id="page-right" class="float-left text-center"><a href="#">Siguiente</a></div>
            </div>
        </div>
    </div>
</div>