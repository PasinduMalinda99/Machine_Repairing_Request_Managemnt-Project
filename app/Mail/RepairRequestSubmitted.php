<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\RepairRequest;

class RepairRequestSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $repair_request;

    /**
     * Create a new message instance.
     *
     * @param RepairRequest $repair_request
     */

    public function __construct(RepairRequest $repair_request)
    {
        $this->repair_request = $repair_request;
    }

    /***
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Repair Request Submitted')
            ->view('emails.repair_request')
            ->with([

                'userMobile' => $this->repair_request->mobile_number,
                'userEmail' => $this->repair_request->email,
                'deviceType' => $this->repair_request->device_type,
                'deviceInformation' => $this->repair_request->device_information,
                'issueDescription' => $this->repair_request->issue_description,
                'additionalDetails' => $this->repair_request->additional_details,

            ]);
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    /*public function envelope()
    {
        return new Envelope(
            subject: 'Repair Request Submitted',
        );
    }*/

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
   /*public function content()
    {
        return new Content(
            view: 'emails.repair_request',
        );
    }*/

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    /*public function attachments()
    {
        return [
            'deviceType' => $this->repair_request->device_type,
            'issueDescription' => $this->repair_request->issue_description,
            // Add more relevant data here
        ];
    }*/
}
