@component('mail::message')
# Notification de rendez-vous

Cher(e) {{ $appointmentData['recipient_name'] }},

Un rendez-vous a été mis à jour avec les détails suivants:

### Détails du nouveau rendez-vous:
- **Date:** {{ $appointmentData['date'] }}
- **Heure:** {{ $appointmentData['time'] }}
- **Emplacement:** {{ $appointmentData['location'] }}

### Détails de l'ancien rendez-vous:
- **Date:** {{ $appointmentData['old_date'] }}
- **Heure:** {{ $appointmentData['old_time'] }}
- **Emplacement:** {{ $appointmentData['location'] }}

### Détails du Patient:
- **Nom:** {{ $appointmentData['patient_name'] }}
- **Email:** {{ $appointmentData['patient_email'] }}

### Details du Médecin:
- **Nom:** {{ $appointmentData['doctor_name'] }}
- **Spécialisation:** {{ $appointmentData['doctor_specialization'] }}


@if($appointmentData['recipient_role'] == 'admin')
## Notification administrateur
Vous recevez cet e-mail car un rendez-vous a été planifié dans votre système..
@endif

@if($appointmentData['recipient_role'] == 'doctor')
## Avis au médecin
Le rendez-vous a été mis à jour avec les informations ci-dessus..
@endif

@if($appointmentData['recipient_role'] == 'patient')
## Avis aux patients
Votre rendez-vous a bien été reprogrammé. Voir les détails ci-dessus.
@endif

Merci,<br>
{{ config('app.name') }}
@endcomponent
