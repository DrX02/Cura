@component('mail::message')
# Annulation de rendez-vous

Cher(e) {{ $appointmentData['recipient_name'] }},

Un rendez-vous a été annulé avec les détails suivants:

### Détails du rendez-vous:
- **Date:** {{ $appointmentData['date'] }}
- **Heure:** {{ $appointmentData['time'] }}
- **Emplacement:** {{ $appointmentData['location'] }}

### Détails du patient:
- **Noms:** {{ $appointmentData['patient_name'] }}
- **Email:** {{ $appointmentData['patient_email'] }}

### Détails du médecin:
- **Noms:** {{ $appointmentData['doctor_name'] }}
- **Spécialisation:** {{ $appointmentData['doctor_specialization'] }}

### Rendez-vous annulé par:
- **Noms:** {{ $appointmentData['cancelled_by'] }}
@if ($appointmentData['cancelled_by'] == 1)
- **Role:** Doctor
@elseif($appointmentData['cancelled_by'] == 2)
- **Role:** Admin
@else
- **Role:** Patient
@endif


@if($appointmentData['role'] == 2)
## Notification à l'administrateur
Vous recevez cet e-mail car un rendez-vous a été planifié dans votre système.
@endif

@if($appointmentData['role'] == 1)
## Notification au médecin
Vous avez un rendez-vous annulé.
@endif

@if($appointmentData['role'] == 0)
## Avis aux patients
Votre rendez-vous a bien été annulé. Vous pouvez néanmoins prendre un autre rendez-vous.
@endif

Merci,<br>
{{ config('app.name') }}
@endcomponent
