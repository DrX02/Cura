@component('mail::message')
# Confirmation de rendez-vous

Cher(e) {{ $appointmentData['recipient_name'] }},

Un rendez-vous a été créé avec succès avec les détails suivants:

### Détails du rendez-vous:
- **Date:** {{ $appointmentData['date'] }}
- **Heure:** {{ $appointmentData['time'] }}
- **Emplacement:** {{ $appointmentData['location'] }}
- **Type de rendez-vous:** {{ $appointmentData['appointment_type'] }}

### Détails du patient:
- **Nom:** {{ $appointmentData['patient_name'] }}
- **Email:** {{ $appointmentData['patient_email'] }}

### Détails du médecin:
- **Nom:** {{ $appointmentData['doctor_name'] }}
- **Spécialisation:** {{ $appointmentData['doctor_specialization'] }}

@if($appointmentData['recipient_role'] == 'admin')
## Notification à l'administrateur
Vous recevez cet e-mail car un rendez-vous a été planifié dans votre système.

@component('mail::button', ['url' => 'http://127.0.0.1:8000/login'])
Voir le rendez-vous
@endcomponent
@endif

@if($appointmentData['recipient_role'] == 'doctor')
## Notification au médecin
Vous avez un nouveau rendez-vous prévu. Veuillez en vérifier les détails et vous préparer en conséquence.

@component('mail::button', ['url' => 'http://127.0.0.1:8000/login'])
Voir le rendez-vous
@endcomponent
@endif

@if($appointmentData['recipient_role'] == 'patient')
## Avis aux patients
Votre rendez-vous a bien été pris. Veuillez respecter l'heure du rendez-vous.

@component('mail::button', ['url' => 'http://127.0.0.1:8000/login'])
Voir le rendez-vous
@endcomponent
@endif

Merci,<br>
{{ config('app.name') }}
@endcomponent