<div class="content">
  <h1 class="text-center mb-5">Bagan Struktur Organisasi Kelurahan</h1>
  <figure class="org-chart cf">
    <ul class="administration">
      <li>
        <ul class="director">
          <li>
            <?php
            // Ambil Lurah
            $lurah = null;
            foreach ($struktur as $item) {
              if (isset($item['jabatan_nama']) && stripos($item['jabatan_nama'], 'lurah') !== false) {
                $lurah = $item;
                break;
              }
            }
            function orgBox($item) {
              $foto = !empty($item['anggota_foto']) ? BASE_URL . '/public/' . htmlspecialchars($item['anggota_foto']) : '/public/img/struktur/pejabat.png';
              $nip = isset($item['nip']) ? $item['nip'] : '';
              return '<a href="#"><span><img src="' . $foto . '" style="width:40px;height:40px;border-radius:50%;margin-bottom:5px;display:block;">'
                . htmlspecialchars($item['jabatan_nama']) . '<br><b>' . htmlspecialchars($item['anggota_nama'] ?? '-') . '</b>'
                . ($nip ? '<br><small>' . htmlspecialchars($nip) . '</small>' : '')
                . '</span></a>';
            }
            if ($lurah) {
              echo orgBox($lurah);
              // Cari anak Lurah
              $anakLurah = array_filter($struktur, function($item) use ($lurah) {
                return $item['atasan_id'] == $lurah['id'];
              });
              // Sekretaris
              $sekretaris = null;
              $depA = null; $depB = null; $depC = null;
              foreach ($anakLurah as $item) {
                $namaJabatan = strtolower($item['jabatan_nama']);
                if (strpos($namaJabatan, 'sekretaris') !== false) {
                  $sekretaris = $item;
                } elseif (strpos($namaJabatan, 'pemerintahan') !== false) {
                  $depA = $item;
                } elseif (strpos($namaJabatan, 'ekonomi') !== false || strpos($namaJabatan, 'pembangunan') !== false) {
                  $depB = $item;
                } elseif (strpos($namaJabatan, 'kesejahteraan') !== false) {
                  $depC = $item;
                }
              }
              // Render Sekretaris
              if ($sekretaris) {
                echo '<ul class="subdirector">';
                echo '<li>' . orgBox($sekretaris) . '</li>';
                echo '</ul>';
              }
              // Render Departemen A, B, C
              echo '<ul class="departments cf">';
              if ($depA) {
                echo '<li class="department dep-a">' . orgBox($depA);
                $sectionsA = array_filter($struktur, function($item) use ($depA) {
                  return $depA && $item['atasan_id'] == $depA['id'];
                });
                if (count($sectionsA)) {
                  echo '<ul class="sections">';
                  foreach ($sectionsA as $sec) {
                    echo '<li class="section">' . orgBox($sec) . '</li>';
                  }
                  echo '</ul>';
                }
                echo '</li>';
              }
              if ($depB) {
                echo '<li class="department dep-b">' . orgBox($depB);
                $sectionsB = array_filter($struktur, function($item) use ($depB) {
                  return $depB && $item['atasan_id'] == $depB['id'];
                });
                if (count($sectionsB)) {
                  echo '<ul class="sections">';
                  foreach ($sectionsB as $sec) {
                    echo '<li class="section">' . orgBox($sec) . '</li>';
                  }
                  echo '</ul>';
                }
                echo '</li>';
              }
              if ($depC) {
                echo '<li class="department dep-c">' . orgBox($depC);
                $sectionsC = array_filter($struktur, function($item) use ($depC) {
                  return $depC && $item['atasan_id'] == $depC['id'];
                });
                if (count($sectionsC)) {
                  echo '<ul class="sections">';
                  foreach ($sectionsC as $sec) {
                    echo '<li class="section">' . orgBox($sec) . '</li>';
                  }
                  echo '</ul>';
                }
                echo '</li>';
              }
              echo '</ul>';
            }
            ?>
          </li>
        </ul>
      </li>
    </ul>
  </figure>
</div>
