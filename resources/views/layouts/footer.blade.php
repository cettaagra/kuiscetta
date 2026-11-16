<footer class="border-t border-slate-800 bg-slate-950 py-6">
    <div class="max-w-5xl mx-auto px-6 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 gap-2">
        <p>&copy; {{ date('Y') }} {{ $profil['nama'] }} ({{ $profil['nim'] }})</p>
        <p>Jurusan {{ $profil['jurusan'] }} · Hobby: {{ $profil['hobi'] }}</p>
    </div>
</footer>