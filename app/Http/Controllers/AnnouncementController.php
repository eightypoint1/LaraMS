<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AnnouncementController extends Controller
{
    /**
     * Menyimpan pengumuman baru ke database
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'content' => 'required|string',
            ]);

            Announcement::create([
                'user_id' => Auth::id(),
                'title' => $validated['title'],
                'content' => $validated['content'],
            ]);

            return redirect()->back()->with('success', 'Pengumuman berhasil dibuat!');
        } catch (\Exception $e) {
            // LOG ERROR untuk debugging
            Log::error('Error membuat pengumuman: '.$e->getMessage());

            return redirect()->back()->with('error', 'Gagal membuat pengumuman. Silahkan coba lagi.');
        }
    }

    /**
     * Mengupdate pengumuman yang sudah ada
     */
    public function update(Request $request, $id)
    {
        try {
            // CARI PENGUMUMAN
            $announcement = Announcement::findOrFail($id);

            // VALIDASI INPUT
            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'content' => 'required|string',
            ]);

            // UPDATE DATA
            $announcement->update([
                'title' => $validated['title'],
                'content' => $validated['content'],
            ]);

            return redirect()->back()->with('success', 'Pengumuman berhasil diperbarui!');
        } catch (\Exception $e) {
            Log::error('Error mengupdate pengumuman: '.$e->getMessage());

            return redirect()->back()->with('error', 'Gagal mengupdate pengumuman. Coba lagi.');
        }
    }

    /**
     * Menghapus pengumuman dari database
     */
    public function destroy($id)
    {
        try {
            // CARI DAN HAPUS
            $announcement = Announcement::findOrFail($id);
            $announcement->delete();

            return redirect()->back()->with('success', 'Pengumuman berhasil dihapus!');
        } catch (\Exception $e) {
            Log::error('Error menghapus pengumuman: '.$e->getMessage());

            return redirect()->back()->with('error', 'Gagal menghapus pengumuman. Coba lagi.');
        }
    }
}
