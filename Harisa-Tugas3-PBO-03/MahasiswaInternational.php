<?php

require_once __DIR__ . '/Mahasiswa.php';

class MahasiswaInternational extends Mahasiswa
{
    private string $negaraAsal;

    public function __construct(
        ?string $nama = null,
        ?string $nim = null,
        int|string|null $umurAtauNegara = null,
        ?string $negaraAsal = null
    ) {
        if (is_string($umurAtauNegara)) {
            parent::__construct($nama ?? 'Belum Diisi', $nim ?? 'Belum Diisi');
            $this->negaraAsal = $umurAtauNegara;
            return;
        }

        parent::__construct(
            $nama ?? 'Belum Diisi',
            $nim ?? 'Belum Diisi',
            $umurAtauNegara ?? 0
        );
        $this->negaraAsal = $negaraAsal ?? 'Belum Diisi';
    }

    public function getNegaraAsal(): string
    {
        return $this->negaraAsal;
    }

    public function setNegaraAsal(string $negaraAsal): void
    {
        $this->negaraAsal = $negaraAsal;
    }

    public function tampilkanInfo(): void
    {
        parent::tampilkanInfo();
        echo "Negara Asal: {$this->negaraAsal}\n";
    }
}