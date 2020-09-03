<?php

namespace App;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Announcement extends Model
{
    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function validateAnnouncementData()
    {
        return request()->validate([
            'title' => 'required|string|max:100',
            'body' => 'required|string',
            'attachment' => ''
        ]);
    }

    public function hasAttachment($value)
    {
        if ($value == null) {
            return null;
        } else {
            return $value;
        }
    }

    public function getAttachmentPath($value)
    {
        if ($value == null) {
            return null;
        } else {
            $path = Storage::putFile('Attachments', $value);
            return $value->storeAs("public", $path);
        }
    }

    public function announcementData()
    {
        $data = $this->validateAnnouncementData();
        if (\request()->attachment == null) {
            return $data + ['user_id' => Auth::id()];
        } else {
            $result = $this->hasAttachment($data['attachment']);
            $value = $this->getAttachmentPath($result);
            return \request()->except('attachment') + array('attachment' => $value, 'user_id' => Auth::id());
        }


    }

    public function updateAttachment($id, $path)
    {
        Announcement::whereId($id)->update(['attachment' => $path]);
    }

    public function updateAnnouncement($id)
    {
        $data = $this->validateAnnouncementData();
        Announcement::whereId($id)->update($data);
    }
}
