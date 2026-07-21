import re
import os

# --- Configuration ---
MULTIPLIER = 0.065          # The value to multiply all px dimensions by

def convert_px_values(content: str) -> str:
    """
    Finds all pixel values in the content and multiplies them by the defined multiplier.
    This function remains unchanged as it contains the core logic.
    """

    def replace_match(match):
        """
        Called for every match to perform calculation and replacement.
        """
        full_match = match.group(0) 
        original_value_str = match.group(1) 

        try:
            original_value = float(original_value_str)
            new_value = original_value * MULTIPLIER
            
            # Format and round the new value for cleaner CSS output
            formatted_value = f"{round(new_value, 4)}"

            return f"{formatted_value}px"
        except ValueError:
            print(f"Warning: Could not process value '{full_match}'. Skipping.")
            return full_match

    # Regex pattern captures the number in group 1
    pattern = r'(\d+\.?\d*)px'
    modified_content = re.sub(pattern, replace_match, content)
    
    return modified_content


def process_file(input_path: str):
    """
    Reads a single file, converts its pixel values, and overwrites the original file.
    
    Args:
        input_path (str): The full path to the CSS file.
    """
    try:
        # 1. Read the content of the file
        with open(input_path, 'r', encoding='utf-8') as f:
            original_content = f.read()

        print(f"\nProcessing: {os.path.basename(input_path)}")
        
        # 2. Convert the content
        converted_content = convert_px_values(original_content)
        
        # 3. Overwrite the original file with the new content
        with open(input_path, 'w', encoding='utf-8') as f:
            f.write(converted_content)

        print(f"   ✅ Successfully converted and OVERWRITTEN {os.path.basename(input_path)}")

    except FileNotFoundError:
        print(f"   ❌ Error: File not found at {input_path}")
    except Exception as e:
        print(f"   ❌ An unexpected error occurred while processing {os.path.basename(input_path)}: {e}")


def main():
    """
    Finds all .css files in the current directory and processes them sequentially.
    """
    # --- SAFETY WARNING ---
    print("=" * 70)
    print("!!! 🔥 !!! CAUTION: BATCH CONVERSION MODE ACTIVATED !!! 🔥 !!!")
    print(f"WARNING: This script will process ALL '.css' files in this directory.")
    print("It will OVERWRITE the original contents of every file it processes.")
    print("🔥 PLEASE BACKUP YOUR FILES BEFORE RUNNING THIS SCRIPT. 🔥")
    print("-" * 70)

    # Get a list of all items in the current working directory
    all_files = os.listdir(os.getcwd())
    css_files = [f for f in all_files if f.endswith('.css')]

    if not css_files:
        print("🛑 No .css files found in the current directory. Exiting.")
        return

    total_files = len(css_files)
    print(f"Found {total_files} CSS file(s) to process.")
    print("-" * 70)


    for i, filename in enumerate(css_files):
        input_path = os.path.join(os.getcwd(), filename)
        
        # Process the file and overwrite it in place
        process_file(input_path)

    print("\n" + "=" * 70)
    print("✨ ALL FILES PROCESSED SUCCESSFULLY! ✨")
    print("=" * 70)


if __name__ == "__main__":
    main()
