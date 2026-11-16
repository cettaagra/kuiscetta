@extends('layouts.app')

@section('title', 'Profil Saya')

@section('content')
    <div class="max-w-3xl mx-auto w-full">
        <div class="mb-8">
            <span class="inline-block px-3.5 py-1 rounded-full text-xs font-semibold bg-cyan-500/10 text-cyan-400 border border-cyan-500/20 mb-3">
                Slide 02 · Profil Mahasiswa
            </span>
            <h1 class="text-3xl sm:text-4xl font-extrabold text-white">
                Identitas {{ $profil['nama'] }}
            </h1>
            <p class="text-slate-400 mt-2">
            </p>
        </div>

        <div class="rounded-3xl bg-slate-900/90 border border-slate-800 p-6 sm:p-8 shadow-xl">
            <div class="flex items-center gap-5 pb-6 mb-6 border-b border-slate-800">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-emerald-400 to-cyan-500 flex items-center justify-center text-slate-950 font-extrabold text-2xl shrink-0">
                    {{ substr($profil['nama'], 0, 1) }}
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-white">{{ $profil['nama'] }}</h2>
                    <p class="text-emerald-400 font-medium text-sm mt-0.5">
                        {{ $profil['nim'] }} · {{ $profil['jurusan'] }}
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                @foreach ($biodata as $item)
                    <div class="p-4 rounded-2xl bg-slate-950 border border-slate-800">
                        <span class="block text-xs font-semibold uppercase tracking-wider text-slate-500">
                            {{ $item['label'] }}
                        </span>
                        <span class="block text-lg font-bold text-white mt-1">
                            {{ $item['value'] }}
                        </span>
                    </div>
                @endforeach
            </div>

            <div class="mt-8 pt-6 border-t border-slate-800 flex items-center justify-between">
                <a href="{{ url('/') }}" class="text-sm font-semibold text-slate-400 hover:text-white transition">
                    &larr; Homepage
                </a>
                <a href="{{ url('/galeri') }}" class="px-5 py-2.5 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-bold text-sm transition">
                    Lanjut ke Galeri Travel &rarr;
                </a>
            </div>
        </div>
    </div>
@endsection