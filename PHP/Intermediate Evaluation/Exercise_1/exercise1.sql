1.
SELECT i.*
FROM instruments i
INNER JOIN instruments_in_band ib ON i.id = ib.instrument_id
INNER JOIN bands b ON b.id = ib.band_id
WHERE b.name = 'Metallica'

2.
SELECT b.name, COUNT(*) as nbInstruments 
FROM bands b
INNER JOIN instruments_in_band ib ON b.id = ib.band_id
GROUP BY b.id

