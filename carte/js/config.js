// config.js
const SUPABASE_URL = 'https://dbwxeqvavkhoqjrirkbh.supabase.co'; // Ton URL Supabase
const SUPABASE_ANON_KEY = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6ImRid3hlcXZhdmtob3Fqcmlya2JoIiwicm9sZSI6ImFub24iLCJpYXQiOjE3MzM2NjEyNTcsImV4cCI6MjA0OTIzNzI1N30.oWjy68DareHBqVmT6Q7CBWlr90rg8vmxorDz2KAZsCU'; // Ta clé publique (API Key)

const supabase = supabase.createClient(SUPABASE_URL, SUPABASE_ANON_KEY);
