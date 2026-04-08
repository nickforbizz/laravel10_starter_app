# Copilot Instructions: Lab Booking System (Laravel)

## 1. Architecture

- Framework: Laravel 10+
- Follow strict layered architecture:

  Controller → Service → Repository → Model

- Rules:
  - Controllers MUST be thin (no business logic)
  - Business logic MUST live in Services
  - Data access MUST go through Repositories
  - Use DTOs for structured data transfer
  - Use Actions for single-responsibility operations where necessary

---

## 2. Folder Structure

app/
├── Http/
│   ├── Controllers/
│   ├── Requests/
├── Services/
├── Repositories/
├── DTOs/
├── Models/
├── Policies/
├── Enums/
├── Actions/

---

## 3. Coding Standards

- Follow PSR-12
- Use strict typing:
  declare(strict_types=1);

- Enforce:
  - Typed properties
  - Return types
  - Constructor property promotion

- Naming conventions:
  - Services: BookingService
  - Repositories: BookingRepository
  - Requests: StoreBookingRequest

- Avoid:
  - Fat controllers
  - Business logic in controllers
  - Raw SQL unless absolutely necessary

---

## 4. Domain Model

### Core Entities

- User
- Booking
- Room
- Equipment
- Timeslot
- Project

### Relationships

- Booking:
  - belongsTo User
  - belongsTo Project
  - belongsTo Room (nullable)
  - belongsTo Equipment (nullable)
  - hasMany Timeslots

---

## 5. Booking Rules (STRICT)

### Core Constraints

- A booking MUST have:
  - Room OR Equipment OR both

- Timeslots MUST:
  - Be continuous
  - Be on the same date
  - Not overlap existing bookings
  - Be in the future
  - Not be booked after start time

### Immutability

After booking creation:
- Room cannot be changed
- Equipment cannot be changed

### Modification Rules

Allowed:
- Timeslot updates
- Additional metadata updates

Not allowed:
- Changing booked resources

### Cancellation Rules

- Cancellation allowed only ≥ 4 hours before start time

---

## 6. Availability Logic

- Prevent double booking
- Use overlap logic:

  start < existing_end AND end > existing_start

- Handle:
  - Room-only bookings
  - Equipment-only bookings
  - Combined bookings

---

## 7. Service Layer Responsibilities

### BookingService

- Create booking
- Update booking
- Cancel booking
- Validate domain rules
- Handle transactions
- Dispatch events

### AvailabilityService

- Check timeslot conflicts
- Validate availability

### RecurringBookingService

- Clone bookings across dates
- Validate each instance

### CheckInService

- Handle check-in/check-out lifecycle

---

## 8. Database Design

- Use foreign key constraints
- Index critical fields:
  - room_id + start_time
  - equipment_id + start_time

- Booking statuses:
  - pending
  - confirmed
  - cancelled
  - checked_in
  - checked_out

---

## 9. Security (OWASP)

- Validate all inputs using Form Requests
- Sanitize inputs
- Use Eloquent to prevent SQL injection
- Enforce:
  - CSRF protection
  - Authorization via Policies/Gates
  - Role-based access control

- Prevent:
  - Mass assignment vulnerabilities
  - IDOR (scope queries properly)

- Never expose:
  - Sensitive user data
  - Internal system data

---

## 10. API Design

- Follow RESTful conventions

Routes:
- GET /api/v1/bookings
- POST /api/v1/bookings
- PUT /api/v1/bookings/{id}
- DELETE /api/v1/bookings/{id}

### Response Format

{
  "status": "success|error",
  "data": {},
  "message": "",
  "errors": []
}

- Use API Resources for responses
- Version APIs (/api/v1/)

---

## 11. Performance

- Avoid N+1 queries (use eager loading)
- Cache:
  - Availability results
  - Static data (rooms, equipment)

- Use queues for:
  - Emails
  - Notifications
  - Recurring booking creation

---

## 12. Concurrency Handling

- Prevent race conditions:
  - Use DB transactions
  - Use row-level locking

Example:
DB::transaction(function () {
    // critical booking logic
});

- Consider Redis locks for distributed systems

---

## 13. Testing

- Use PHPUnit

### Required Tests

- Feature tests:
  - Booking creation
  - Conflict detection
  - Cancellation rules

- Unit tests:
  - Services

- Edge cases:
  - Overlapping bookings
  - Boundary time conditions

---

## 14. Logging & Auditing

- Log:
  - Booking creation
  - Failures
  - Conflicts

- Maintain audit trail:
  - user_id
  - action
  - timestamp

---

## 15. Events & Notifications

Dispatch events:
- BookingCreated
- BookingUpdated
- BookingCancelled

Notifications:
- Booking confirmation email
- No-show alerts
- Failed check-in notifications

---

## 16. Check-in / Check-out Rules

- Sequence enforcement:
  - Room → Equipment → Equipment → Room

- Rules:
  - Early check-in allowed (≤ 30 minutes before start)
  - Cannot check-in after end time
  - Equipment requires room check-in first

---

## 17. Recurring Bookings

- Based on existing booking (copy model)
- Only date is editable
- Validate availability per date
- Each instance is a separate booking

---

## 18. General Principles

- Prefer readability over cleverness
- Keep functions small and focused
- Follow SOLID principles
- Fail fast on invalid data
- Always validate domain rules in Services (not controllers)

---

## 19. Documentation
- Document public methods with PHPDoc
- Provide usage examples in docblocks where necessary
- Maintain an up-to-date README with:
  - Setup instructions
  - API documentation
  - Architectural overview
