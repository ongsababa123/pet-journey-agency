<div class="container" style="padding: 140px 2rem 60px;">
    <div class="row">
        <div class="col-12">
            <div class="card" style="border-radius:12px;padding:2rem;">
                <h2>SEO Demo</h2>
                <p>หน้านี้เป็นตัวอย่างการตั้งค่า meta ผ่าน <code>set_meta()</code> ใน controller.</p>
                <ul>
                    <li><strong>Title:</strong> <?= esc($title) ?></li>
                    <li><strong>Description (seo):</strong> <?= esc(function_exists('seo') ? seo('description') : '') ?></li>
                    <li><strong>Image (seo):</strong> <?= esc(function_exists('seo') ? seo('image') : '') ?></li>
                    <li><strong>Canonical (seo):</strong> <?= esc(function_exists('seo') ? seo('canonical') : '') ?></li>
                </ul>
                <p>เปิดหน้า: <a href="<?= current_url() ?>"><?= current_url() ?></a></p>
            </div>
        </div>
    </div>
</div>
