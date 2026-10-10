<?php
$footerAddress = $footerAddress ?? '105 Vo Nguyen Giap Street, Ngu Hanh Son District, Da Nang City, Viet Nam';
$scriptVersion = $scriptVersion ?? '20260916';
?>
    <footer class="site-footer">
        <div class="wrap">
            <div>
                <h4>4th ASEAN–China Justice Forum</h4>
                <p>Diễn đàn Tư pháp ASEAN – Trung Quốc lần thứ tư</p>
                <p>Hosted by the Supreme People's Court of the Socialist Republic of Viet Nam</p>
            </div>
            <div>
                <p>Furama Resort Danang</p>
                <p><?= htmlspecialchars($footerAddress, ENT_QUOTES, 'UTF-8') ?></p>
                <p>9–12 October 2026</p>
            </div>
        </div>
        <div class="wrap copyright">© 2026 4th ASEAN–China Justice Forum. All rights reserved.</div>
    </footer>
    <script src="assets/js/main.js?v=<?= rawurlencode($scriptVersion) ?>"></script>
</body>

</html>
