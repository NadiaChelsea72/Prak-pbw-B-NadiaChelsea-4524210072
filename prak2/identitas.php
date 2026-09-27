<?php
interface Identitas
{
    public function ringkasan(): string;
}

class Mahasiswa implements Identitas
{
    private string $nim;
    private string $nama;
    private string $prodi;
    protected float $ipk;

    public function __construct(string $nim, string $nama, string $prodi, float $ipk) //menambahkan string $prodi pada constructor
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi; //menambahkan prodi pada constructor
        $this->setIpk($ipk);
    }

    public function setIpk(float $ipk): void
    {
        if ($ipk < 0 || $ipk > 4) {
            throw new InvalidArgumentException('IPK harus 0 sampai 4.');
        }
        $this->ipk = $ipk;
    }

    public function getIpk(): float
    {
        return $this->ipk;
    }

    public function ringkasan(): string
    {
        return $this->nim . ' - ' . $this->nama . ' - ' . $this->prodi . ' - IPK: ' . $this->ipk; //menambahkan prodi pada ringkasan
    }
}

$mhs = new Mahasiswa('4524210072', 'Nadia Chelsea', 'Teknik Informatika', 3.75); //menambahkan prodi pada instansiasi objek
echo $mhs->ringkasan();

//menambah tutupan php ?>