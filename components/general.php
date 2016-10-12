<div id="general" class="navbar-target"></div>
<section class="section pt1 pb1">
    <div class="container">
        <h2 class="text-center up h2 mb1">General classes</h2>
        <p class="text-center orange">You can find other general classes in <b class="grey">/sass/framework/_general.scss</b></p>
    </div>
    <div class="container">
        <table class="hoverable full">
            <thead>
                <tr>
                    <th colspan="2" class="text-center">Size and space</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Set up with=100%</td>
                    <td><span class="label brown-bg">.full</span></td>
                </tr>
                <tr>
                    <td>Margin {number} * $gap (16px)</td>
                    <td><span class="label brown-bg">.m{number}</span></td>
                </tr>
                <tr>
                    <td>Margin left, right, top, bottom</td>
                    <td>
                        <span class="label brown-bg">.ml{number}</span>
                        <span class="label brown-bg">.mr{number}</span><br>
                        <span class="label brown-bg">.mt{number}</span>
                        <span class="label brown-bg">.mb{number}</span>
                    </td>
                </tr>
                <tr>
                    <td>Padding {number} * $gap (16px)</td>
                    <td><span class="label brown-bg">.p{number}</span></td>
                </tr>
                <tr>
                    <td>Padding left, right, top, bottom</td>
                    <td>
                        <span class="label brown-bg">.pl{number}</span>
                        <span class="label brown-bg">.pr{number}</span><br>
                        <span class="label brown-bg">.pt{number}</span>
                        <span class="label brown-bg">.pb{number}</span>
                    </td>
                </tr>
                <tr>
                    <td>Align content to center using flex</td>
                    <td><span class="label brown-bg">.flex-middle</span></td>
                </tr>
            </tbody>
        </table>

        <table class="hoverable full mt1">
            <thead>
                <tr>
                    <th colspan="2" class="text-center">Position</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Fixed</td>
                    <td><span class="label brown-bg">.fixed</span></td>
                </tr>
                <tr>
                    <td>Absolute</td>
                    <td><span class="label brown-bg">.absolute</span></td>
                </tr>
                <tr>
                    <td>Relative</td>
                    <td><span class="label brown-bg">.relative</span></td>
                </tr>
                <tr>
                    <td>Positions for <b>.fixed</b> and <b>.absolute</b></td>
                    <td>
                        <span class="label brown-bg">.fill</span>
                        <span class="label brown-bg">.top-left</span>
                        <span class="label brown-bg">.top-right</span>
                        <span class="label brown-bg">.bottom-left</span>
                        <span class="label brown-bg">.bottom-right</span>
                    </td>
                </tr>
                <tr>
                    <td>Z-index for <b>.fixed</b> and <b>.absolute</b></td>
                    <td>
                        <span class="label brown-bg">.z0</span>
                        <span class="label brown-bg">.z1</span>
                        <span class="label brown-bg">.z100</span>
                        <span class="label brown-bg">.z1000</span>
                        <span class="label brown-bg">.z9999</span>
                    </td>
                </tr>
            </tbody>
        </table>

        <table class="hoverable full mt1">
            <thead>
                <tr>
                    <th colspan="2" class="text-center">Edges</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Shadow</td>
                    <td><span class="label brown-bg">.shadow-{1...5}</span></td>
                </tr>
                <tr>
                    <td>Border (default -> width: 1px, color: light)</td>
                    <td>
                        <span class="label brown-bg">.border</span>
                        <span class="label brown-bg">.border-right</span>
                        <span class="label brown-bg">.border-left</span>
                        <span class="label brown-bg">.border-top</span>
                        <span class="label brown-bg">.border-bottom</span>
                    </td>
                </tr>
                <tr>
                    <td>Circle (always is inline-block)</td>
                    <td><span class="label brown-bg">.circle</span></td>
                </tr>
            </tbody>
        </table>

        <table class="hoverable full mt1">
            <thead>
                <tr>
                    <th colspan="2" class="text-center">Images</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Background</td>
                    <td><span class="label brown-bg">.cover</span></td>
                </tr>
                <tr>
                    <td>Wrapper for <b>img</b> tag</td>
                    <td>
                        <span class="label brown-bg">.image</span>
                    </td>
                </tr>
                <tr>
                    <td>Scale effect fot <b>img</b> (wrapper)</td>
                    <td>
                        <span class="label brown-bg">.hover-scale</span>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
</section>