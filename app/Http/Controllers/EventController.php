<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Http\Resources\EventsResource;
use App\Models\Event;
use App\Traits\HttpResponses;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;

class EventController extends Controller
{
    use HttpResponses;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return EventsResource::collection(Event::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEventRequest $request)
    {

        $data = $request->validated();
        $data['start'] = date('Y-m-d H:i:s', $data['start']);
        $data['end'] = date('Y-m-d H:i:s', $data['end']);

        $event = auth()->user()->events()->create($data);

        return new EventsResource($event);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return new EventsResource($event);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        try {
            $this->authorize('update', $event);

            $data = $request->validated();
            $data['start'] = date('Y-m-d H:i:s', $data['start']);
            $data['end'] = date('Y-m-d H:i:s', $data['end']);

            $event->update($data);
            return new EventsResource($event);
        } catch (AuthorizationException $err) {
            return  $this->error('', $err->getMessage(), $err->status());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        try {
            $this->authorize('update', $event);

            $event->delete();

            return $this->success(null, 'You have deleted your event successfully.', 204);
        } catch (AuthorizationException $err) {
            return  $this->error('', $err->getMessage(), $err->status());
        }
    }
}